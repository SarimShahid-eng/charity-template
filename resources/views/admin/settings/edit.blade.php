@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Logo & site info')
@section('crumbs')<a href="{{ route('admin.dashboard') }}" class="text-muted">Dashboard</a> › Logo &amp; site info @endsection
@section('heading', 'Logo & site info')
@section('subtitle', 'These details appear on every page of your website (header, footer and contact page).')

@section('content')
@php $groupIcons = ['Logo & icon' => 'bi-image', 'General' => 'bi-card-text', 'Contact details' => 'bi-telephone', 'Social links' => 'bi-share', 'Home hero' => 'bi-stars']; @endphp
@php $groupNames = ['Home hero' => 'Home banner text']; @endphp

<form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data" id="settings-form">
    @csrf @method('PUT')

    <div class="d-flex flex-wrap align-items-center gap-2 mb-3 py-2 px-3 bg-white border rounded sticky-top" style="top:.5rem;z-index:20">
        <button class="btn btn-success"><i class="bi bi-check2-circle"></i> Save changes</button>
        <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-secondary btn-sm ms-auto"><i class="bi bi-box-arrow-up-right"></i> View website</a>
    </div>

    <ul class="nav nav-tabs mb-3" role="tablist">
        @foreach($schema as $group => $fields)
        <li class="nav-item"><button type="button" class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#grp{{ $loop->index }}">
            <i class="bi {{ $groupIcons[$group] ?? 'bi-gear' }}"></i> {{ $groupNames[$group] ?? $group }}</button></li>
        @endforeach
    </ul>

    <div class="tab-content">
    @foreach($schema as $group => $fields)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="grp{{ $loop->index }}">
            <div class="card"><div class="card-body"><div class="row g-3">
            @foreach($fields as $key => $meta)
                @php [$label, $default, $type] = $meta; $help = $meta[3] ?? null; @endphp
                @if($type === 'image')
                    <div class="col-md-6">
                        <div class="border rounded p-3 h-100">
                            <div class="fw-semibold">{{ $label }}</div>
                            @if($help)<div class="small text-muted mb-2">{{ $help }}</div>@endif
                            <div class="text-center rounded mb-2 p-3 {{ $key === 'logo_dark' ? 'bg-white border' : ($key === 'favicon' ? 'bg-light' : '') }}"
                                 style="{{ in_array($key, ['logo_home','logo_light']) ? 'background:#2a493d' : '' }}">
                                <img src="{{ asset($values[$key] ?? $default) }}" alt="" style="max-height:70px;max-width:100%">
                            </div>
                            <input type="file" name="img[{{ $key }}]" accept="image/*" class="form-control form-control-sm">
                            @if(str_starts_with($values[$key] ?? '', 'uploads/'))
                                <div class="form-check mt-1"><input class="form-check-input" type="checkbox" name="reset[{{ $key }}]" value="1" id="r_{{ $key }}">
                                    <label class="form-check-label small" for="r_{{ $key }}">Go back to the original picture</label></div>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="col-md-{{ $type === 'textarea' ? 12 : 6 }}">
                        <label class="form-label fw-semibold">{{ $label }}</label>
                        @if($type === 'textarea')
                            <textarea name="{{ $key }}" rows="3" class="form-control">{{ old($key, $values[$key] ?? '') }}</textarea>
                        @else
                            <input type="{{ $type }}" name="{{ $key }}" class="form-control" value="{{ old($key, $values[$key] ?? '') }}">
                        @endif
                    </div>
                @endif
            @endforeach
            </div></div></div>
        </div>
    @endforeach
    </div>
    <div class="mt-3"><button class="btn btn-success btn-lg">Save changes</button></div>
</form>
@endsection
