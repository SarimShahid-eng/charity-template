<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;

/**
 * Blocks a public page (GET and POST) with a 404 when it is switched OFF in the admin panel.
 * Applies to everybody, including logged-in admins - admins preview via /admin/preview/{page}.
 *
 * Usage: ->middleware(PageActive::class . ':about')
 */
class PageActive
{
    public function handle(Request $request, Closure $next, string $slug)
    {
        abort_unless(Setting::pageActive($slug), 404);

        return $next($request);
    }
}
