@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin login · {{ $s['site_name'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>body{background:#2a493d;min-height:100vh;display:flex;align-items:center;justify-content:center;font-family:system-ui,sans-serif}</style>
</head>
<body>
<div class="card shadow border-0" style="width:100%;max-width:400px">
    <div class="card-body p-4">
        <h1 class="h4 text-center mb-1">{{ $s['site_name'] }}</h1>
        <p class="text-center text-muted mb-4">Admin panel</p>
        <form method="POST" action="{{ route('admin.login.attempt') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus>
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button class="btn btn-success w-100">Sign in</button>
        </form>
    </div>
</div>
</body>
</html>
