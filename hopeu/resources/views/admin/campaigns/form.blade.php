@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@php $editing = $campaign->exists; @endphp
@section('title', $editing ? 'Edit campaign' : 'New campaign')
@section('heading', $editing ? 'Edit campaign' : 'New campaign')

@section('content')
<form method="POST" enctype="multipart/form-data"
      action="{{ $editing ? route('admin.campaigns.update', $campaign) : route('admin.campaigns.store') }}">
    @csrf
    @if($editing) @method('PUT') @endif

    <div class="card"><div class="card-body">
        <div class="row g-3">
            <div class="col-md-8">
                <label class="form-label">Title *</label>
                <input name="title" class="form-control" value="{{ old('title', $campaign->title) }}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Category tag *</label>
                <input name="category" class="form-control" value="{{ old('category', $campaign->category) }}" required>
            </div>
            <div class="col-12">
                <label class="form-label">Short description</label>
                <input name="excerpt" class="form-control" maxlength="255" value="{{ old('excerpt', $campaign->excerpt) }}">
            </div>
            <div class="col-md-4">
                <label class="form-label">Goal ($) *</label>
                <input type="number" min="0" name="goal" class="form-control" value="{{ old('goal', $campaign->goal ?? 0) }}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Raised ($) *</label>
                <input type="number" min="0" name="raised" class="form-control" value="{{ old('raised', $campaign->raised ?? 0) }}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Supporters *</label>
                <input type="number" min="0" name="supporters" class="form-control" value="{{ old('supporters', $campaign->supporters ?? 0) }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Image (JPG/PNG/WEBP, max 3 MB)</label>
                <input type="file" name="image" accept="image/*" class="form-control">
                @if($editing && $campaign->image)<img src="{{ $campaign->image_url }}" alt="" class="mt-2 rounded" style="height:80px">@endif
            </div>
            <div class="col-md-3">
                <label class="form-label">Sort order</label>
                <input type="number" min="0" name="sort_order" class="form-control" value="{{ old('sort_order', $campaign->sort_order ?? 0) }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="is_active" id="is_active" value="1" @checked(old('is_active', $campaign->is_active))>
                    <label class="form-check-label" for="is_active">Show on website</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer bg-white">
        <button class="btn btn-success">Save</button>
        <a href="{{ route('admin.campaigns.index') }}" class="btn btn-link">Cancel</a>
    </div></div>
</form>
@endsection
