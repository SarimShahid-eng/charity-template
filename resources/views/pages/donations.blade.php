@extends('layouts.app', ['header' => 'inner', 'footer' => 'two'])
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@php $c = \App\Support\Content::make(); @endphp

@section('title', 'Donations - ' . $s['site_name'])

@section('content')
		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		<div class="inner-banner-one header-space-fix-three text-center position-relative z-1" style="background-image: url({{ $c->img('donations_banner') }});">
            <div class="container">
                <h2>{{ $c('donations_t001') }}</h2>
                <div class="breadcrumb-content">
                    <ul class="style-none d-inline-flex justify-content-center position-relative z-1">
                        <li><a href="{{ route('home') }}">{{ $c('donations_t002') }}</a></li>
                        <li>-</li>
                        <li>{{ $c('donations_t003') }}</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('images/shape/shape_43.png') }}" alt="shape" class="shapes shape_01">
		</div>
		<!-- /.inner-banner-one -->





		<!--
		=====================================================
			Causes Section One
		=====================================================
		-->
		<div class="causes-section-one position-relative z-1 pt-130 lg-pt-80 pb-100 lg-pb-80">
			<div class="container">
				<div class="title-one text-center mb-30 lg-mb-10" data-sal="slide-up" data-sal-duration="900">
					<div class="upper-title">{{ $c('donations_t004') }}</div>
					<h2>{{ $c('donations_t005') }}</h2>
				</div>
				<!-- /.title-one -->
			</div>
			<div class="box-layout-one">
				<div class="row">
					@forelse($campaigns as $campaign)
					<div class="col-xl-4 col-md-6">
						@include('partials.campaign-card', ['campaign' => $campaign, 'extra' => 'mt-30'])
					</div>
					@empty
					<p class="text-center mt-30">{{ $c('donations_t006') }}</p>
					@endforelse
				</div>
			</div>
			<!-- /.box-layout-one -->

            @if($campaigns->hasPages())
			<div class="pagination-one mt-60 lg-mt-40">
				{{ $campaigns->links('partials.pagination') }}
			</div>
			@endif
		</div>
		<!-- /.causes-section-one -->



		<!--
		=====================================================
			Fancy Banner One
		=====================================================
		-->
		<div class="fancy-banner-one version-three position-relative z-2 style-one">
			<div class="box-layout-two">
				<div class="bg-wrapper position-relative z-1">
					<div class="container">
						<div class="row">
							<div class="col-xxl-8 col-lg-6 m-auto text-center">
								<div class="title-one mb-25" data-sal="slide-up" data-sal-duration="900">
									<h2 class="text-white">{{ $c('donations_t007') }}</h2>
								</div>
								<!-- /.title-one -->
								<p class="fw-500 mb-50 lg-mb-30">{{ $c('donations_t008') }} </p>
								<form action="#" class="position-relative z-1">
									<input type="email" placeholder="Email Address">
									<button>{{ $c('donations_t009') }}</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /.bg-wrapper -->
			</div>
			<!-- /.box-layout-two -->
			
			<img src="{{ asset('images/shape/shape_44.png') }}" alt="shape" class="shapes shape_03">
			<img src="{{ asset('images/shape/shape_45.png') }}" alt="shape" class="shapes shape_04">
		</div>
		<!-- /.fancy-banner-one -->



		
@endsection
