<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'messages'  => ContactMessage::count(),
            'unread'    => ContactMessage::unread()->count(),
            'today'     => ContactMessage::whereDate('created_at', today())->count(),
            'campaigns' => Campaign::active()->count(),
        ];
        $latest = ContactMessage::latest()->take(6)->get();

        return view('admin.dashboard', compact('stats', 'latest'));
    }
}
