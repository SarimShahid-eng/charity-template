@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="non profit, charity, fundraising, donation website, NGO, volunteer">
	<meta name="description" content="@yield('description', $s['footer_text'])">
	<meta property="og:site_name" content="{{ $s['site_name'] }}">
	<meta property="og:type" content="website">
	<meta property="og:title" content="@yield('title', $s['site_name'])">
	<meta property="og:image" content="{{ asset('images/assets/ogg.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#104b59">
	<title>@yield('title', $s['site_name'])</title>
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="all">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}" media="all">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="all">
	@stack('styles')
</head>

<body>
	<div class="main-page-wrapper">
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="{{ asset('images/loader.png') }}" alt="" class="m-auto d-block"> <span></span></div>
				<div class="txt-loading">
					@foreach(str_split(strtoupper(preg_replace('/[^A-Za-z]/', '', $s['site_name']))) as $letter)
					<span data-text-preloader="{{ $letter }}" class="letters-loading">{{ $letter }}</span>
					@endforeach
				</div>
			</div>
		</div>

		@include('partials.header-' . ($header ?? 'inner'))

		@yield('content')

		@include('partials.footer-' . ($footer ?? 'two'))

		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>

		<script src="{{ asset('vendor/jquery.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('vendor/sal/sal.js') }}"></script>
		<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
		<script src="{{ asset('vendor/fancybox/fancybox.umd.js') }}"></script>
		<script src="{{ asset('vendor/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('vendor/validator.js') }}"></script>
		<script src="{{ asset('js/theme.js') }}"></script>
		@stack('scripts')
	</div>
</body>
</html>
