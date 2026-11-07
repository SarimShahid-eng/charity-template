@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Dashboard')
@section('heading', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
    @foreach([
        ['Total messages', $stats['messages'], 'bi-envelope', 'success'],
        ['Unread', $stats['unread'], 'bi-envelope-exclamation', 'warning'],
        ['Received today', $stats['today'], 'bi-calendar-check', 'info'],
        ['Active campaigns', $stats['campaigns'], 'bi-gift', 'primary'],
    ] as [$label, $value, $icon, $color])
    <div class="col-6 col-xl-3">
        <div class="card"><div class="card-body d-flex align-items-center">
            <i class="bi {{ $icon }} fs-1 text-{{ $color }} me-3"></i>
            <div><div class="text-muted small">{{ $label }}</div><div class="fs-3 fw-semibold">{{ $value }}</div></div>
        </div></div>
    </div>
    @endforeach
</div>

<div class="card">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <strong>Latest messages</strong>
        <a href="{{ route('admin.messages.index') }}" class="btn btn-sm btn-outline-success">View all</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <tbody>
            @forelse($latest as $m)
                <tr class="{{ $m->is_read ? '' : 'msg-unread' }}">
                    <td><a href="{{ route('admin.messages.show', $m) }}" class="text-decoration-none text-dark">{{ $m->name }}</a><div class="small text-muted">{{ $m->email }}</div></td>
                    <td class="d-none d-md-table-cell">{{ \Illuminate\Support\Str::limit($m->message, 70) }}</td>
                    <td class="text-end small text-muted">{{ $m->created_at->diffForHumans() }}</td>
                </tr>
            @empty
                <tr><td class="text-center text-muted py-4">No messages yet.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
