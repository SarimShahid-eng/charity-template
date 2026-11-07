<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

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
        $rules = [];
        foreach (Setting::schema() as $fields) {
            foreach ($fields as $key => $meta) {
                $rules[$key] = ['nullable', 'string', 'max:1000'];
                if ($meta[2] === 'email') $rules[$key][] = 'email';
                if ($meta[2] === 'url')   $rules[$key][] = 'url';
            }
        }
        $rules['site_name'] = ['required', 'string', 'max:100'];

        Setting::put($request->validate($rules));

        return back()->with('success', 'Settings saved.');
    }
}
