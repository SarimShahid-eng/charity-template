@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Edit ' . $page['label'])
@section('crumbs')<a href="{{ route('admin.dashboard') }}" class="text-muted">Dashboard</a> › <a href="{{ route('admin.pages.index') }}" class="text-muted">Website pages</a> › {{ $page['label'] }} @endsection
@section('heading', 'Editing: ' . $page['label'] . ' page')
@section('subtitle', 'Pick a block on the left, change its text or pictures, then press "Save changes".')

@section('content')
@php
    $blocks = [];
    $i = 0;
    foreach ($page['sections'] as $section => $fields) {
        $i++;
        [$title, $hint] = \App\Support\Content::block($slug, $section);
        $edited = 0;
        foreach ($fields as $key => $meta) { if (($dbValues[$key] ?? '') !== '') $edited++; }
        $blocks[] = ['n' => $i, 'id' => 'block' . $i, 'title' => $title, 'hint' => $hint, 'fields' => $fields, 'edited' => $edited];
    }
    $total = count($blocks);
    $pageUrl = $active ? ($slug === 'home' ? route('home') : route($slug)) : route('admin.pages.preview', $slug);
@endphp

<form method="POST" action="{{ route('admin.pages.update', $slug) }}" enctype="multipart/form-data" id="page-form">
    @csrf @method('PUT')
    <input type="hidden" name="block" id="current-block" value="">

    {{-- sticky action bar --}}
    <div class="d-flex flex-wrap align-items-center gap-2 mb-3 py-2 px-3 bg-white border rounded sticky-top" style="top:.5rem;z-index:20">
        <button class="btn btn-success"><i class="bi bi-check2-circle"></i> Save changes</button>
        <span id="unsaved" class="text-danger small d-none"><i class="bi bi-exclamation-circle"></i> You have unsaved changes</span>
        <span class="ms-auto d-flex gap-2 align-items-center">
            @if($active)<span class="badge bg-success">Page is ON</span>@else<span class="badge bg-secondary">Page is OFF</span>@endif
            <a href="{{ $pageUrl }}" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="bi bi-box-arrow-up-right"></i> {{ $active ? 'View page' : 'Preview page' }}</a>
            <button type="submit" form="reset-form" class="btn btn-outline-danger btn-sm" onclick="return confirm('Reset EVERYTHING on this page back to the original text and pictures?')">Reset page</button>
        </span>
    </div>

    <div class="row g-3">
        {{-- LEFT: list of blocks --}}
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-white"><strong>Blocks on this page</strong><div class="small text-muted">in the order visitors see them</div></div>
                <div class="nav flex-column nav-pills p-2" id="block-tabs" role="tablist">
                    @foreach($blocks as $b)
                    <button type="button" class="nav-link text-start d-flex align-items-start gap-2 {{ $loop->first ? 'active' : '' }}"
                            id="tab-{{ $b['id'] }}" data-bs-toggle="pill" data-bs-target="#{{ $b['id'] }}" data-block="{{ $b['id'] }}" role="tab">
                        <span class="badge rounded-pill bg-light text-dark border">{{ $b['n'] }}</span>
                        <span class="flex-grow-1 lh-sm">{{ $b['title'] }}<br><small class="opacity-75">{{ count($b['fields']) }} items {{ $b['edited'] ? '· ' . $b['edited'] . ' changed' : '' }}</small></span>
                    </button>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- RIGHT: the selected block --}}
        <div class="col-lg-9">
            <div class="tab-content">
                @foreach($blocks as $b)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $b['id'] }}" role="tabpanel">
                    <div class="card">
                        <div class="card-header text-white" style="background:#2a493d">
                            <div class="small opacity-75">You are editing · {{ $page['label'] }} page · Block {{ $b['n'] }} of {{ $total }}</div>
                            <div class="h5 mb-0">{{ $b['title'] }}</div>
                        </div>
                        <div class="card-body">
                            @if($b['hint'])<div class="alert alert-light border small"><i class="bi bi-lightbulb"></i> {{ $b['hint'] }}</div>@endif

                            <div class="row g-3">
                            @foreach($b['fields'] as $key => [$label, $default, $type])
                                @if($type === 'image')
                                    <div class="col-md-6 col-xl-4">
                                        <div class="border rounded p-2 h-100">
                                            <div class="small fw-semibold mb-1"><i class="bi bi-image"></i> Picture <span class="text-muted fw-normal">({{ $label }})</span></div>
                                            <div class="text-center bg-light rounded mb-2 p-2"><img src="{{ $content->img($key) }}" alt="" style="max-height:100px;max-width:100%"></div>
                                            <input type="file" name="img[{{ $key }}]" accept="image/*" class="form-control form-control-sm">
                                            @if(($dbValues[$key] ?? '') !== '')
                                                <div class="form-check mt-1"><input class="form-check-input" type="checkbox" name="reset[{{ $key }}]" value="1" id="r_{{ $key }}">
                                                    <label class="form-check-label small" for="r_{{ $key }}">Go back to the original picture</label></div>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-{{ $type === 'textarea' ? 12 : 6 }}">
                                        <label class="form-label small fw-semibold mb-1"><i class="bi bi-fonts"></i> Text <span class="text-muted fw-normal">— {{ \Illuminate\Support\Str::limit($label, 38) }}</span></label>
                                        @if($type === 'textarea')
                                            <textarea name="f[{{ $key }}]" rows="{{ min(6, max(2, substr_count($default, "\n") + 1 + intdiv(strlen($default), 110))) }}" class="form-control">{{ $content($key) }}</textarea>
                                        @else
                                            <input type="text" name="f[{{ $key }}]" class="form-control" value="{{ $content($key) }}">
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between">
                            @if(! $loop->first)<button type="button" class="btn btn-outline-secondary" data-go="{{ $loop->index - 1 }}">&larr; Previous block</button>@else<span></span>@endif
                            <button class="btn btn-success"><i class="bi bi-check2-circle"></i> Save changes</button>
                            @if(! $loop->last)<button type="button" class="btn btn-outline-secondary" data-go="{{ $loop->index + 1 }}">Next block &rarr;</button>@else<span></span>@endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</form>
<form id="reset-form" method="POST" action="{{ route('admin.pages.reset', $slug) }}">@csrf @method('DELETE')</form>

<style>
    #block-tabs .nav-link { color:#2a493d; border-radius:.5rem; margin-bottom:.2rem; }
    #block-tabs .nav-link.active { background:#3e8f75; color:#fff; }
    #block-tabs .nav-link.active .badge { background:#fff!important; }
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var tabs = Array.from(document.querySelectorAll('#block-tabs [data-block]'));
    var hidden = document.getElementById('current-block');
    function show(i) { if (tabs[i]) { bootstrap.Tab.getOrCreateInstance(tabs[i]).show(); window.scrollTo({top: 0, behavior: 'smooth'}); } }

    tabs.forEach(function (t) {
        t.addEventListener('shown.bs.tab', function () {
            hidden.value = t.dataset.block;
            history.replaceState(null, '', '#' + t.dataset.block);
        });
    });
    document.querySelectorAll('[data-go]').forEach(function (b) {
        b.addEventListener('click', function () { show(parseInt(b.dataset.go, 10)); });
    });
    var start = tabs.findIndex(function (t) { return '#' + t.dataset.block === location.hash; });
    if (start > 0) { bootstrap.Tab.getOrCreateInstance(tabs[start]).show(); } else { hidden.value = tabs[0] ? tabs[0].dataset.block : ''; }

    // unsaved-changes hint
    var dirty = false, note = document.getElementById('unsaved');
    document.getElementById('page-form').addEventListener('input', function () { dirty = true; note.classList.remove('d-none'); });
    document.getElementById('page-form').addEventListener('submit', function () { dirty = false; });
    window.addEventListener('beforeunload', function (e) { if (dirty) { e.preventDefault(); e.returnValue = ''; } });
});
</script>
@endsection
