@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Campaigns')
@section('heading', 'Donation campaigns')
@section('subtitle', 'These are the donation cards shown on the Home and Donations pages.')

@section('content')
<div class="mb-3"><a href="{{ route('admin.campaigns.create') }}" class="btn btn-success"><i class="bi bi-plus-lg"></i> New campaign</a></div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light"><tr><th style="width:80px"></th><th>Title</th><th>Category</th><th>Raised / Goal</th><th>Status</th><th></th></tr></thead>
            <tbody>
            @forelse($campaigns as $c)
                <tr>
                    <td><img src="{{ $c->image_url }}" alt="" class="rounded" style="width:64px;height:48px;object-fit:cover"></td>
                    <td>{{ $c->title }}<div class="small text-muted">Order: {{ $c->sort_order }}</div></td>
                    <td>{{ $c->category }}</td>
                    <td class="text-nowrap">${{ number_format($c->raised) }} / ${{ number_format($c->goal) }} <span class="text-muted">({{ $c->percent }}%)</span></td>
                    <td>@if($c->is_active)<span class="badge bg-success">Active</span>@else<span class="badge bg-secondary">Hidden</span>@endif</td>
                    <td class="text-end text-nowrap">
                        <a href="{{ route('admin.campaigns.edit', $c) }}" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil"></i></a>
                        <form method="POST" action="{{ route('admin.campaigns.destroy', $c) }}" class="d-inline" onsubmit="return confirm('Delete this campaign?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center text-muted py-5">No campaigns yet.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
    @if($campaigns->hasPages())<div class="card-footer bg-white">{{ $campaigns->links('pagination::bootstrap-5') }}</div>@endif
</div>
@endsection
