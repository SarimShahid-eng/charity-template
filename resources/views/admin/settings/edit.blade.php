@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Site settings')
@section('heading', 'Site settings')

@section('content')
<form method="POST" action="{{ route('admin.settings.update') }}">
    @csrf @method('PUT')
    @foreach($schema as $group => $fields)
    <div class="card mb-4">
        <div class="card-header bg-white"><strong>{{ $group }}</strong></div>
        <div class="card-body"><div class="row g-3">
            @foreach($fields as $key => [$label, $default, $type])
                <div class="col-md-{{ $type === 'textarea' ? 12 : 6 }}">
                    <label class="form-label">{{ $label }}</label>
                    @if($type === 'textarea')
                        <textarea name="{{ $key }}" rows="3" class="form-control">{{ old($key, $values[$key] ?? '') }}</textarea>
                    @else
                        <input type="{{ $type }}" name="{{ $key }}" class="form-control" value="{{ old($key, $values[$key] ?? '') }}">
                    @endif
                </div>
            @endforeach
        </div></div>
    </div>
    @endforeach
    <button class="btn btn-success btn-lg">Save settings</button>
</form>
@endsection
