<?php

namespace App\Http\Controllers;

use App\Models\Campaign;

class PageController extends Controller
{
    public function home()
    {
        $campaigns = Campaign::active()->ordered()->take(8)->get();

        return view('pages.home', compact('campaigns'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function donations()
    {
        $campaigns = Campaign::active()->ordered()->paginate(9);

        return view('pages.donations', compact('campaigns'));
    }
}
