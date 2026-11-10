<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function edit()
    {
        return view('admin.settings.edit', [
            'schema' => Setting::schema(),
            'values' => Setting::allCached(),
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'img.*' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif,ico', 'max:3072'],
        ];
        foreach (Setting::schema() as $fields) {
            foreach ($fields as $key => $meta) {
                if ($meta[2] === 'image') continue;
                $rules[$key] = ['nullable', 'string', 'max:1000'];
                if ($meta[2] === 'email') $rules[$key][] = 'email';
                if ($meta[2] === 'url')   $rules[$key][] = 'url';
            }
        }
        $rules['site_name'] = ['required', 'string', 'max:100'];

        $validated = $request->validate($rules);
        unset($validated['img']);
        Setting::put($validated);

        // logos / favicon
        $files  = (array) $request->file('img', []);
        $resets = (array) $request->input('reset', []);
        foreach (Setting::schema() as $fields) {
            foreach ($fields as $key => $meta) {
                if ($meta[2] !== 'image') continue;
                $old = Setting::where('key', $key)->value('value');

                if (! empty($resets[$key])) {
                    $this->deleteUpload($old);
                    Setting::where('key', $key)->delete();
                } elseif (isset($files[$key]) && $files[$key]->isValid()) {
                    $dir = public_path('uploads/site');
                    if (! is_dir($dir)) mkdir($dir, 0755, true);
                    $name = Str::random(24) . '.' . $files[$key]->getClientOriginalExtension();
                    $files[$key]->move($dir, $name);
                    $this->deleteUpload($old);
                    Setting::updateOrCreate(['key' => $key], ['value' => 'uploads/site/' . $name]);
                }
            }
        }
        Setting::flush();

        return back()->with('success', 'Saved! Your changes are now live on the website.');
    }

    private function deleteUpload(?string $path): void
    {
        if ($path && str_starts_with($path, 'uploads/site/')) {
            @unlink(public_path($path));
        }
    }
}
