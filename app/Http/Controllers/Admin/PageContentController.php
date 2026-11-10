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

        $active = [];
        foreach ($pages as $slug => $page) {
            $active[$slug] = Setting::pageActive($slug);
        }

        return view('admin.pages.index', compact('pages', 'counts', 'active'));
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
            'active'  => Setting::pageActive($page),
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

        $block = preg_replace('/[^A-Za-z0-9_-]/', '', (string) $request->input('block'));

        return redirect(route('admin.pages.edit', $page) . ($block ? '#' . $block : ''))
            ->with('success', 'Saved! Your changes are now live on the website.');
    }

    /** Admin-only preview: renders a page even when it is switched OFF for visitors. */
    public function preview(string $page)
    {
        $this->pageOr404($page);

        return match ($page) {
            'home'      => app(\App\Http\Controllers\PageController::class)->home(),
            'donations' => app(\App\Http\Controllers\PageController::class)->donations(),
            'about'     => app(\App\Http\Controllers\PageController::class)->about(),
            'contact'   => app(\App\Http\Controllers\ContactController::class)->show(),
        };
    }

    public function toggle(string $page)
    {
        $data = $this->pageOr404($page);
        $nowActive = ! Setting::pageActive($page);

        Setting::updateOrCreate(['key' => 'page_active_' . $page], ['value' => $nowActive ? '1' : '0']);
        Setting::flush();

        return back()->with('success', $data['label'] . ' page is now ' . ($nowActive ? 'ON (visible to visitors).' : 'OFF (hidden from visitors).'));
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
