@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title', 'Admin') · {{ $s['site_name'] }}</title>
    <link rel="icon" type="image/png" href="{{ asset($s['favicon']) }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/bootstrap-icons-1.11.1/font/bootstrap-icons.css') }}">
    <style>
        body { background:#f4f7f6; font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif; }
        .sidebar { width:240px; min-height:100vh; background:#2a493d; }
        .sidebar a { color:#cfe3dd; text-decoration:none; display:flex; align-items:center; gap:.6rem; padding:.7rem 1.1rem; border-radius:.4rem; margin:.15rem .6rem; }
        .sidebar a:hover, .sidebar a.active { background:#3e8f75; color:#fff; }
        .nav-title { color:#8fb3a6; font-size:.7rem; letter-spacing:.08em; text-transform:uppercase; padding:1rem 1.2rem .3rem; }
        .brand { color:#fff; font-weight:600; font-size:1.2rem; padding:1.2rem 1.1rem; }
        .msg-unread td { font-weight:600; background:#fffdf0; }
        .card { border:0; box-shadow:0 1px 3px rgba(0,0,0,.08); }
        @media (max-width: 767px){ .sidebar{ width:100%; min-height:auto; } .layout{ flex-direction:column; } }
    </style>
</head>
<body>
@php $unread = \App\Models\ContactMessage::unread()->count(); @endphp
<div class="d-flex layout">
    <aside class="sidebar flex-shrink-0">
        <div class="brand"><i class="bi bi-heart-fill text-warning"></i> {{ $s['site_name'] }}</div>
        <nav class="pb-3">
            <div class="nav-title">Overview</div>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="bi bi-house-door"></i> Dashboard</a>

            <div class="nav-title">Edit my website</div>
            <a href="{{ route('admin.pages.index') }}" class="{{ request()->routeIs('admin.pages.*') ? 'active' : '' }}"><i class="bi bi-file-earmark-richtext"></i> Website pages</a>
            <a href="{{ route('admin.campaigns.index') }}" class="{{ request()->routeIs('admin.campaigns.*') ? 'active' : '' }}"><i class="bi bi-gift"></i> Donation campaigns</a>
            <a href="{{ route('admin.settings.edit') }}" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}"><i class="bi bi-image"></i> Logo &amp; site info</a>

            <div class="nav-title">Visitors</div>
            <a href="{{ route('admin.messages.index') }}" class="{{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
                <i class="bi bi-envelope"></i> Messages
                @if($unread)<span class="badge bg-warning text-dark ms-auto">{{ $unread }} new</span>@endif
            </a>

            <div class="nav-title">&nbsp;</div>
            <a href="{{ route('home') }}" target="_blank"><i class="bi bi-box-arrow-up-right"></i> View my website</a>
            <form method="POST" action="{{ route('admin.logout') }}" class="mt-3 mx-2">
                @csrf
                <button class="btn btn-outline-light btn-sm w-100"><i class="bi bi-box-arrow-left"></i> Log out</button>
            </form>
        </nav>
    </aside>

    <main class="flex-grow-1 p-4">
        @hasSection('crumbs')<nav class="small text-muted mb-1">@yield('crumbs')</nav>@endif
        <h1 class="h3 mb-1">@yield('heading')</h1>
        @hasSection('subtitle')<p class="text-muted mb-4">@yield('subtitle')</p>@else<div class="mb-4"></div>@endif

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
        @endif

        @yield('content')
    </main>
</div>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
