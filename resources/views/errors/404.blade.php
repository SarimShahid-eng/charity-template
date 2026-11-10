@extends('layouts.app', ['header' => 'inner', 'footer' => 'two'])

@section('title', 'Page not available')

@section('content')
<section style="padding:190px 0 110px" class="text-center">
    <div class="container">
        <h1 style="font-size:90px">404</h1>
        <h2 class="mb-3">This page is not available right now</h2>
        <p class="mb-4">The page you are looking for does not exist or has been switched off.</p>
        @if(\App\Models\Setting::pageActive('home'))
            <a href="{{ route('home') }}" class="btn-one">Back to home</a>
        @endif
    </div>
</section>
@endsection
