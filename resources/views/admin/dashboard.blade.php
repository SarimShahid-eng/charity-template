@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Dashboard')
@section('heading', 'Welcome back 👋')
@section('subtitle', 'What would you like to do today?')

@section('content')
<div class="row g-3 mb-4">
    @foreach([
        ['Edit website pages', 'Change the text and pictures on Home, Donations, About and Contact.', 'bi-file-earmark-richtext', route('admin.pages.index'), 'success'],
        ['Read messages', $stats['unread'] . ' unread · ' . $stats['messages'] . ' total from your contact form.', 'bi-envelope', route('admin.messages.index'), 'warning'],
        ['Donation campaigns', $stats['campaigns'] . ' campaigns are showing on your website.', 'bi-gift', route('admin.campaigns.index'), 'primary'],
        ['Logo & site info', 'Change your logo, phone, email, address and social links.', 'bi-image', route('admin.settings.edit'), 'info'],
    ] as [$title, $text, $icon, $url, $color])
    <div class="col-md-6 col-xl-3">
        <a href="{{ $url }}" class="card h-100 text-decoration-none text-dark action-card">
            <div class="card-body">
                <i class="bi {{ $icon }} fs-1 text-{{ $color }}"></i>
                <h5 class="mt-2">{{ $title }}</h5>
                <p class="text-muted mb-0 small">{{ $text }}</p>
            </div>
        </a>
    </div>
    @endforeach
</div>

<div class="row g-3">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <strong>Latest messages</strong>
                <a href="{{ route('admin.messages.index') }}" class="btn btn-sm btn-outline-success">See all</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0"><tbody>
                @forelse($latest as $m)
                    <tr class="{{ $m->is_read ? '' : 'msg-unread' }}">
                        <td><a href="{{ route('admin.messages.show', $m) }}" class="text-decoration-none text-dark">{{ $m->name }}</a><div class="small text-muted">{{ $m->email }}</div></td>
                        <td class="d-none d-md-table-cell">{{ \Illuminate\Support\Str::limit($m->message, 60) }}</td>
                        <td class="text-end small text-muted">{{ $m->created_at->diffForHumans() }}</td>
                    </tr>
                @empty
                    <tr><td class="text-center text-muted py-4">No messages yet.</td></tr>
                @endforelse
                </tbody></table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-white"><strong>Your pages</strong></div>
            <ul class="list-group list-group-flush">
                @foreach(\App\Support\Content::pages() as $slug => $page)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('admin.pages.edit', $slug) }}" class="text-decoration-none">{{ $page['label'] }}</a>
                    @if(\App\Models\Setting::pageActive($slug))<span class="badge bg-success">ON</span>@else<span class="badge bg-secondary">OFF</span>@endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<style>.action-card{transition:.15s}.action-card:hover{transform:translateY(-3px);box-shadow:0 6px 16px rgba(0,0,0,.12)!important}</style>
@endsection
