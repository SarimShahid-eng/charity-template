<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Support\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageContentController extends Controller
{
    public function index()
    {
        $pages = Content::pages();
        $overrides = Setting::allCached();
        $counts = [];
        foreach ($pages as $slug => $page) {
            $total = $changed = 0;
            foreach ($page['sections'] as $fields) {
                foreach ($fields as $key => $meta) {
                    $total++;
                    if (($overrides[$key] ?? '') !== '') $changed++;
                }
            }
            $counts[$slug] = compact('total', 'changed');
        }

        return view('admin.pages.index', compact('pages', 'counts'));
    }

    public function edit(string $page)
    {
        $data = $this->pageOr404($page);
        $content = Content::make();

        return view('admin.pages.edit', [
            'slug'    => $page,
            'page'    => $data,
            'content' => $content,
            'dbValues'=> Setting::allCached(),
        ]);
    }

    public function update(Request $request, string $page)
    {
        $data = $this->pageOr404($page);

        $request->validate([
            'f.*'   => ['nullable', 'string', 'max:3000'],
            'img.*' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'],
        ]);

        $texts   = (array) $request->input('f', []);
        $resets  = (array) $request->input('reset', []);
        $files   = (array) $request->file('img', []);
        $defaults = Content::defaults();

        foreach ($data['sections'] as $fields) {
            foreach ($fields as $key => [$label, $default, $type]) {
                if ($type === 'image') {
                    $old = Setting::where('key', $key)->value('value');

                    if (! empty($resets[$key])) {
                        $this->forget($key, $old);
                    } elseif (isset($files[$key]) && $files[$key]->isValid()) {
                        $dir = public_path('uploads/content');
                        if (! is_dir($dir)) {
                            mkdir($dir, 0755, true);
                        }
                        $name = Str::random(24) . '.' . $files[$key]->getClientOriginalExtension();
                        $files[$key]->move($dir, $name);
                        $this->deleteUpload($old);
                        Setting::updateOrCreate(['key' => $key], ['value' => 'uploads/content/' . $name]);
                    }
                    continue;
                }

                if (! array_key_exists($key, $texts)) {
                    continue;
                }
                $val = trim(str_replace("\r\n", "\n", (string) $texts[$key]));

                if ($val === '' || $val === $default) {
                    Setting::where('key', $key)->delete();      // back to the default
                } else {
                    Setting::updateOrCreate(['key' => $key], ['value' => $val]);
                }
            }
        }

        Setting::flush();

        return back()->with('success', 'Page content saved.');
    }

    public function reset(string $page)
    {
        $data = $this->pageOr404($page);

        foreach ($data['sections'] as $fields) {
            foreach ($fields as $key => $meta) {
                $this->forget($key, Setting::where('key', $key)->value('value'));
            }
        }
        Setting::flush();

        return back()->with('success', 'All content on this page was reset to the defaults.');
    }

    private function forget(string $key, ?string $old): void
    {
        $this->deleteUpload($old);
        Setting::where('key', $key)->delete();
    }

    private function deleteUpload(?string $path): void
    {
        if ($path && str_starts_with($path, 'uploads/content/')) {
            @unlink(public_path($path));
        }
    }

    private function pageOr404(string $page): array
    {
        $pages = Content::pages();
        abort_unless(isset($pages[$page]), 404);

        return $pages[$page];
    }
}
