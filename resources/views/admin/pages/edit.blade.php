@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Edit ' . $page['label'])
@section('heading', 'Edit page: ' . $page['label'])

@section('content')
<form method="POST" action="{{ route('admin.pages.update', $slug) }}" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="d-flex flex-wrap gap-2 mb-3 position-sticky top-0 py-2 bg-white border-bottom" style="z-index:5">
        <button class="btn btn-success"><i class="bi bi-check2"></i> Save changes</button>
        <a href="{{ $slug === 'home' ? route('home') : route($slug) }}" target="_blank" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-up-right"></i> View page</a>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-link">&larr; All pages</a>
        <button type="submit" form="reset-form" class="btn btn-outline-danger ms-auto" onclick="return confirm('Reset ALL content on this page to the defaults?')">Reset page</button>
    </div>

    <div class="accordion" id="sections">
        @foreach($page['sections'] as $section => $fields)
        @php $id = 'sec' . $loop->index; @endphp
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}">
                    {{ $section }} <span class="badge bg-secondary ms-2">{{ count($fields) }}</span>
                </button>
            </h2>
            <div id="{{ $id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#sections">
                <div class="accordion-body"><div class="row g-3">
                @foreach($fields as $key => [$label, $default, $type])
                    @if($type === 'image')
                        <div class="col-md-6 col-xl-4">
                            <label class="form-label fw-semibold">Image <small class="text-muted">({{ $label }})</small></label>
                            <div class="mb-2"><img src="{{ $content->img($key) }}" alt="" class="border rounded bg-light" style="max-height:90px;max-width:100%"></div>
                            <input type="file" name="img[{{ $key }}]" accept="image/*" class="form-control form-control-sm">
                            @if(($dbValues[$key] ?? '') !== '')
                                <div class="form-check mt-1"><input class="form-check-input" type="checkbox" name="reset[{{ $key }}]" value="1" id="r_{{ $key }}">
                                    <label class="form-check-label small" for="r_{{ $key }}">Restore original image</label></div>
                            @endif
                        </div>
                    @else
                        <div class="col-md-{{ $type === 'textarea' ? 12 : 6 }}">
                            <label class="form-label fw-semibold">{{ \Illuminate\Support\Str::limit($label, 45) }}</label>
                            @if($type === 'textarea')
                                <textarea name="f[{{ $key }}]" rows="{{ min(6, max(2, substr_count($default, "\n") + 1 + intdiv(strlen($default), 110))) }}" class="form-control">{{ $content($key) }}</textarea>
                            @else
                                <input type="text" name="f[{{ $key }}]" class="form-control" value="{{ $content($key) }}">
                            @endif
                        </div>
                    @endif
                @endforeach
                </div></div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-3"><button class="btn btn-success btn-lg">Save changes</button></div>
</form>
<form id="reset-form" method="POST" action="{{ route('admin.pages.reset', $slug) }}">@csrf @method('DELETE')</form>
@endsection
