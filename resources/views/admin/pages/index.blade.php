@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Pages content')
@section('heading', 'Pages content')

@section('content')
<p class="text-muted">Choose a page to edit every text and image on it. Leave a field blank to use the original text.</p>
<div class="row g-3">
    @foreach($pages as $slug => $page)
    <div class="col-md-6 col-xl-3">
        <div class="card h-100"><div class="card-body d-flex flex-column">
            <h5>{{ $page['label'] }}</h5>
            <p class="text-muted small mb-3">{{ $counts[$slug]['total'] }} editable items &middot; {{ $counts[$slug]['changed'] }} customised</p>
            <a href="{{ route('admin.pages.edit', $slug) }}" class="btn btn-success mt-auto">Edit page</a>
        </div></div>
    </div>
    @endforeach
</div>
@endsection
