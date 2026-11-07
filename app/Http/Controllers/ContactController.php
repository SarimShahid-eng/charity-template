<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:190'],
            'phone'   => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        // Honeypot: real visitors never see/fill this hidden field.
        if (! $request->filled('website')) {
            ContactMessage::create($data + ['ip_address' => $request->ip()]);
        }
        // dd('ss');

        $text = 'Thank you! Your message has been sent. We will get back to you soon.';

        if ($request->expectsJson()) {
            return response()->json(['type' => 'success', 'message' => $text]);
        }

        return redirect()->route('contact')->with('success', $text);
    }
}
