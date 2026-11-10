@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Messages')
@section('heading', 'Messages from your visitors')
@section('crumbs')<a href="{{ route('admin.dashboard') }}" class="text-muted">Dashboard</a> › Messages @endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form method="GET" class="row g-2 align-items-center">
            <div class="col-md-5">
                <input type="search" name="q" value="{{ request('q') }}" class="form-control" placeholder="Search name, email, phone or message">
            </div>
            <div class="col-auto">
                <select name="filter" class="form-select" onchange="this.form.submit()">
                    <option value="">All messages</option>
                    <option value="unread" @selected(request('filter') === 'unread')>Unread only</option>
                </select>
            </div>
            <div class="col-auto"><button class="btn btn-success">Search</button></div>
            @if(request()->hasAny(['q','filter']))<div class="col-auto"><a href="{{ route('admin.messages.index') }}" class="btn btn-link">Reset</a></div>@endif
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light"><tr><th>From</th><th class="d-none d-md-table-cell">Phone</th><th class="d-none d-lg-table-cell">Message</th><th>Received</th><th></th></tr></thead>
            <tbody>
            @forelse($messages as $m)
                <tr class="{{ $m->is_read ? '' : 'msg-unread' }}">
                    <td>
                        @unless($m->is_read)<span class="badge bg-warning text-dark me-1">New</span>@endunless
                        <a href="{{ route('admin.messages.show', $m) }}" class="text-decoration-none text-dark">{{ $m->name }}</a>
                        <div class="small text-muted">{{ $m->email }}</div>
                    </td>
                    <td class="d-none d-md-table-cell">{{ $m->phone ?: '—' }}</td>
                    <td class="d-none d-lg-table-cell">{{ \Illuminate\Support\Str::limit($m->message, 60) }}</td>
                    <td class="small text-muted text-nowrap">{{ $m->created_at->format('d M Y, H:i') }}</td>
                    <td class="text-end text-nowrap">
                        <a href="{{ route('admin.messages.show', $m) }}" class="btn btn-sm btn-outline-success" title="Open"><i class="bi bi-eye"></i></a>
                        <form method="POST" action="{{ route('admin.messages.destroy', $m) }}" class="d-inline" onsubmit="return confirm('Delete this message?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center text-muted py-5">No messages found.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
    @if($messages->hasPages())<div class="card-footer bg-white">{{ $messages->links('pagination::bootstrap-5') }}</div>@endif
</div>
@endsection
