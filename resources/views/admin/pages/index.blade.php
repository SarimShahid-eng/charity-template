@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Website pages')
@section('crumbs')Dashboard › Website pages @endsection
@section('heading', 'Website pages')
@section('subtitle', 'Switch pages ON or OFF, and click "Edit content" to change their text and pictures.')

@section('content')
<div class="row g-3">
    @foreach($pages as $slug => $page)
    @php $url = $active[$slug] ? ($slug === 'home' ? route('home') : route($slug)) : route('admin.pages.preview', $slug); @endphp
    <div class="col-md-6 col-xl-3">
        <div class="card h-100 {{ $active[$slug] ? '' : 'opacity-75' }}">
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="mb-0">{{ $page['label'] }}</h5>
                    @if($active[$slug])<span class="badge bg-success">ON</span>@else<span class="badge bg-secondary">OFF</span>@endif
                </div>
                <a href="{{ $url }}" target="_blank" class="small text-muted text-decoration-none mb-3">{{ $active[$slug] ? (parse_url($url, PHP_URL_PATH) ?: '/') : 'Preview (admin only)' }} <i class="bi bi-box-arrow-up-right"></i></a>
                <p class="small text-muted">{{ count($page['sections']) }} blocks · {{ $counts[$slug]['changed'] }} of {{ $counts[$slug]['total'] }} items customised</p>

                <a href="{{ route('admin.pages.edit', $slug) }}" class="btn btn-success mt-auto"><i class="bi bi-pencil-square"></i> Edit content</a>
                <form method="POST" action="{{ route('admin.pages.toggle', $slug) }}" class="mt-2"
                      @if($active[$slug] && $slug === 'home') onsubmit="return confirm('Turn OFF the Home page? Visitors going to your main address will see a page-not-available message.')" @endif>
                    @csrf @method('PATCH')
                    <button class="btn btn-sm w-100 {{ $active[$slug] ? 'btn-outline-secondary' : 'btn-outline-success' }}">
                        <i class="bi {{ $active[$slug] ? 'bi-eye-slash' : 'bi-eye' }}"></i> {{ $active[$slug] ? 'Turn page OFF' : 'Turn page ON' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="alert alert-light border mt-4 small mb-0">
    <i class="bi bi-info-circle"></i> A page that is OFF disappears from the menu and its address shows a "page not available" (404) message to everyone, including you. Use the "Preview" link on the card to look at it as admin.
</div>
@endsection
