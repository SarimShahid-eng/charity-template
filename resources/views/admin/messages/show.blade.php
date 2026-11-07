@extends('admin.layout')
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@section('title', 'Message from ' . $message->name)
@section('heading', 'Message')

@section('content')
<div class="card">
    <div class="card-body">
        <dl class="row mb-4">
            <dt class="col-sm-3">Name</dt><dd class="col-sm-9">{{ $message->name }}</dd>
            <dt class="col-sm-3">Email</dt><dd class="col-sm-9"><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></dd>
            <dt class="col-sm-3">Phone</dt><dd class="col-sm-9">@if($message->phone)<a href="tel:{{ preg_replace('/[^+\d]/', '', $message->phone) }}">{{ $message->phone }}</a>@else — @endif</dd>
            <dt class="col-sm-3">Received</dt><dd class="col-sm-9">{{ $message->created_at->format('d M Y, H:i') }} ({{ $message->created_at->diffForHumans() }})</dd>
            <dt class="col-sm-3">IP address</dt><dd class="col-sm-9">{{ $message->ip_address ?: '—' }}</dd>
        </dl>
        <h6>Message</h6>
        <div class="p-3 bg-light rounded" style="white-space:pre-wrap">{{ $message->message }}</div>
    </div>
    <div class="card-footer bg-white d-flex flex-wrap gap-2">
        <a href="mailto:{{ $message->email }}?subject={{ rawurlencode('Re: your message to ' . $s['site_name']) }}" class="btn btn-success"><i class="bi bi-reply"></i> Reply by email</a>
        <form method="POST" action="{{ route('admin.messages.toggle', $message) }}">
            @csrf @method('PATCH')
            <button class="btn btn-outline-secondary"><i class="bi bi-envelope"></i> Mark as unread</button>
        </form>
        <form method="POST" action="{{ route('admin.messages.destroy', $message) }}" onsubmit="return confirm('Delete this message?')">
            @csrf @method('DELETE')
            <button class="btn btn-outline-danger"><i class="bi bi-trash"></i> Delete</button>
        </form>
        <a href="{{ route('admin.messages.index') }}" class="btn btn-link ms-auto">&larr; Back to messages</a>
    </div>
</div>
@endsection
