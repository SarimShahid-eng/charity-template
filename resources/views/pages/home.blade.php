@extends('layouts.app', ['header' => 'home', 'footer' => 'one'])
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@php $c = \App\Support\Content::make(); @endphp

@section('title', $s['site_name'] . ' - Home')

@section('content')
		<!-- 
		=============================================
			Hero Banner
		============================================== 
		-->
		<div class="hero-banner-one header-space-fix position-relative z-1 pt-140 lg-pt-120 sm-pt-90 pb-170 xl-pb-120 md-pb-100 sm-pb-70">
			<div class="box-layout-one">
				<div class="row">
					<div class="col-xl-5 col-md-6">
						<div class="slogan font-amita fs-20" data-sal="slide-up" data-sal-duration="900">
							{{ $s['hero_slogan'] }}
						</div>
						<h1 class="hero-heading" data-sal="slide-up" data-sal-duration="900" data-sal-delay="300">{{ $s['hero_heading'] }}</h1>
						<p class="fs-20" data-sal="slide-up" data-sal-duration="900" data-sal-delay="500">{{ $s['hero_text'] }}</p>
						<div class="mt-35" data-sal="slide-up" data-sal-duration="900" data-sal-delay="700">
							<a href="{{ route('donations') }}" class="btn-one">{{ $c('home_t001') }}</a>
						</div>
						<div class="avatar-group mt-35" data-sal="slide-up" data-sal-duration="900" data-sal-delay="900">
							<ul class="style-none d-flex align-items-center">
								<li><img src="{{ $c->img('home_i001') }}" alt="" class="avatar rounded-circle"></li>
								<li><img src="{{ $c->img('home_i002') }}" alt="" class="avatar rounded-circle"></li>
								<li><img src="{{ $c->img('home_i003') }}" alt="" class="avatar rounded-circle"></li>
								<li class="fs-20">{{ $c('home_t002') }}</li>
							</ul>
						</div>
						<!-- /.avatar-group -->
					</div>
				</div>

				<div class="media-wrapper" data-sal="slide-left" data-sal-duration="900" data-sal-delay="500">
					<img src="{{ $c->img('home_i004') }}" alt="Main Image">
					<div class="card-wrapper d-flex align-items-center">
						<div class="icon rounded-circle d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up-right"></i></div>
						<p class="font-amita">{{ $c('home_t003') }}</p>
					</div>
					<!-- /.card-wrapper -->
					<img src="{{ asset('images/shape/shape_01.png') }}" alt="" class="shapes shape_01">
					<img src="{{ asset('images/shape/shape_02.png') }}" alt="" class="shapes shape_02">
					<img src="{{ asset('images/shape/shape_03.png') }}" alt="" class="shapes shape_03">
				</div>
				<!-- /.media-wrapper -->
			</div>			
		</div>
		<!-- /.hero-banner-one -->


		


		<!--
		=====================================================
			Feature Block One
		=====================================================
		-->
		<div class="feature-block-one pt-45 lg-pt-10 pb-75 lg-pb-40">
			<div class="box-layout-one">
				<div class="row justify-content-center">
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="900">
						<div class="card-style-one text-center position-relative z-1 tran3s mt-25 border-style">
							<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('home_i005') }}" alt="" class="m-auto"></div>
							<h4>{!! nl2br(e($c('home_t004'))) !!}</h4>
						</div>
						<!-- /.card-style-one -->
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200">
						<div class="card-style-one text-center position-relative z-1 tran3s mt-25 border-style">
							<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('home_i006') }}" alt="" class="m-auto"></div>
							<h4>{!! nl2br(e($c('home_t005'))) !!}</h4>
						</div>
						<!-- /.card-style-one -->
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="400">
						<div class="card-style-one text-center position-relative z-1 tran3s mt-25 border-style">
							<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('home_i007') }}" alt="" class="m-auto"></div>
							<h4>{!! nl2br(e($c('home_t006'))) !!}</h4>
						</div>
						<!-- /.card-style-one -->
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="600">
						<div class="card-style-one text-center position-relative z-1 tran3s mt-25">
							<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('home_i008') }}" alt="" class="m-auto"></div>
							<h4>{!! nl2br(e($c('home_t007'))) !!}</h4>
						</div>
						<!-- /.card-style-one -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.feature-block-one -->


		<!--
		=====================================================
			Feature Block Two
		=====================================================
		-->
		<div class="feature-block-two position-relative z-1 pt-140 lg-pt-80 pb-100 lg-pb-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 d-flex" data-sal="slide-right" data-sal-duration="900">
						<div class="pe-lg-5 w-100">
							<div class="title-one mb-30">
								<div class="upper-title">{{ $c('home_t008') }}</div>
								<h2>{{ $c('home_t009') }}</h2>
							</div>
							<!-- /.title-one -->
							<div class="row">
								<div class="col-xl-11">
									<p>{{ $c('home_t010') }}</p>
									<ul class="style-none list-style-one d-flex flex-wrap pt-10">
										<li>{{ $c('home_t011') }}</li>
										<li>{{ $c('home_t012') }}</li>
										<li>{{ $c('home_t013') }}</li>
										<li>{{ $c('home_t014') }}</li>
									</ul>
									<!-- /.list-style-one -->
									<p class="mb-45 mt-30">{{ $c('home_t015') }}</p>
									<a href="{{ route('about') }}" class="btn-two">{{ $c('home_t016') }}</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 me-auto ms-auto d-flex" data-sal="slide-left" data-sal-duration="900">
						<div class="media-bg position-relative z-1 w-100" style="background-image: url({{ $c->img('home_i010') }});">
							<div class="card-one d-flex align-items-center">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('home_i009') }}" alt=""></div>
								<div class="text">
									<div class="main-count"><span class="counter">{{ $c('home_t017') }}</span>+</div>
									<p>{{ $c('home_t018') }}</p>
								</div>
							</div>
							<!-- /.card-one -->
							<div class="card-two text-center">
								<div class="main-count"><span class="counter">{{ $c('home_t019') }}</span>{{ $c('home_t020') }}</div>
								<p>{{ $c('home_t021') }} </p>
							</div>
							<!-- /.card-two -->
						</div>
						<!-- /.media-bg -->
					</div>
				</div>
			</div>

			<div class="shapes shape_01"></div>
			<img src="{{ asset('images/shape/shape_04.png') }}" alt="Shape" class="shapes shape_02">
			<img src="{{ asset('images/shape/shape_05.png') }}" alt="Shape" class="shapes shape_03">
			<img src="{{ asset('images/shape/shape_06.png') }}" alt="Shape" class="shapes shape_04">
		</div>
		<!-- /.feature-block-two -->


		<div class="pb-130 lg-pb-80">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 col-sm-6">
						<div class="counter-block-one text-center mt-30" data-sal="slide-up" data-sal-duration="900">
							<div class="main-count"><span class="counter">{{ $c('home_t022') }}</span>+</div>
							<p>{{ $c('home_t023') }}</p>
						</div>
						<!-- /.counter-block-one -->
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="counter-block-one text-center mt-30" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200">
							<div class="main-count">$<span class="counter">{{ $c('home_t024') }}</span>{{ $c('home_t025') }}</div>
							<p>{{ $c('home_t026') }}</p>
						</div>
						<!-- /.counter-block-one -->
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="counter-block-one text-center mt-30" data-sal="slide-up" data-sal-duration="900" data-sal-delay="400">
							<div class="main-count"><span class="counter">{{ $c('home_t027') }}</span>{{ $c('home_t028') }}</div>
							<p>{{ $c('home_t029') }}</p>
						</div>
						<!-- /.counter-block-one -->
					</div>
				</div>
			</div>
		</div>



		<!--
		=====================================================
			Causes Section One
		=====================================================
		-->
		<div class="causes-section-one position-relative z-1 pt-130 lg-pt-80 pb-100 lg-pb-80">
			<div class="container">
				<div class="title-one text-center mb-60 lg-mb-40" data-sal="slide-up" data-sal-duration="900">
					<div class="upper-title">{{ $c('home_t030') }}</div>
					<h2>{{ $c('home_t031') }}</h2>
				</div>
				<!-- /.title-one -->
			</div>
			<div class="box-layout-one">
				<div class="causes-slider-one">
					@forelse($campaigns as $campaign)
					<div class="item">
						@include('partials.campaign-card', ['campaign' => $campaign])
					</div>
					@empty
					<div class="item"><p class="text-center">{{ $c('home_t032') }}</p></div>
					@endforelse
				</div>
			</div>
			<!-- /.box-layout-one -->
		</div>
		<!-- /.causes-section-one -->


		<!--
		=====================================================
			Feature Block Three
		=====================================================
		-->
		<div class="feature-block-three position-relative z-1 pt-140 lg-pt-80 pb-140 lg-pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 d-flex order-lg-last" data-sal="slide-left" data-sal-duration="900">
						<div class="ps-lg-5 w-100">
							<div class="title-one mb-30">
								<div class="upper-title">{{ $c('home_t033') }}</div>
								<h2>{{ $c('home_t034') }} </h2>
							</div>
							<!-- /.title-one -->
							<p>{{ $c('home_t035') }}</p>
							<div class="card-one d-flex align-items-center mt-30 mb-50 lg-mb-30">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('home_i011') }}" alt=""></div>
								<div class="text">
									<div class="main-count font-amita">$<span class="counter">{{ $c('home_t036') }}</span>{{ $c('home_t037') }}</div>
									<p class="fs-16 fw-500">{{ $c('home_t038') }}</p>
								</div>
							</div>
							<!-- /.card-one -->
							<ul class="style-none list-style-two d-flex flex-wrap">
								<li><span>{{ $c('home_t039') }}</span></li>
								<li><span>{{ $c('home_t040') }}</span></li>
							</ul>
							<!-- /.list-style-two -->

							<div class="sucess-score mt-35">
								<p>{{ $c('home_t041') }}</p>
								<div class="progress-bar position-relative">
									<div class="progress position-relative" style="width: 65%;">
										<span>{{ $c('home_t042') }}</span>
									</div>
								</div>
								<!-- /.progress-bar -->
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 me-auto ms-auto d-flex" data-sal="slide-right" data-sal-duration="900">
						<div class="media-bg position-relative z-1 w-100" style="background-image: url({{ $c->img('home_i013') }});">
							<div class="card-one d-flex align-items-center">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('home_i012') }}" alt=""></div>
								<div class="text">
									<div class="main-count"><span class="counter">{{ $c('home_t043') }}</span>+</div>
									<p>{{ $c('home_t044') }}</p>
								</div>
							</div>
							<!-- /.card-one -->

							<div class="years">
								<img src="{{ $c->img('home_i014') }}" alt="">
								<span class="counter">{{ $c('home_t045') }}</span>
							</div>
						</div>
						<!-- /.media-bg -->
					</div>
				</div>
			</div>

			<img src="{{ asset('images/shape/shape_08.png') }}" alt="Shape" class="shapes shape_01">
			<img src="{{ asset('images/shape/shape_09.png') }}" alt="Shape" class="shapes shape_02">
			<img src="{{ asset('images/shape/shape_10.png') }}" alt="Shape" class="shapes shape_03">
			<img src="{{ asset('images/shape/shape_11.png') }}" alt="Shape" class="shapes shape_04">
		</div>
		<!-- /.feature-block-three -->




		<!--
		=====================================================
			Event Section One
		=====================================================
		-->
		<div class="event-section-one position-relative z-1 pt-130 lg-pt-80">
			<div class="container">
				<div class="title-one text-center mb-70 lg-mb-50" data-sal="slide-up" data-sal-duration="900">
					<div class="upper-title">{{ $c('home_t046') }}</div>
					<h2>{{ $c('home_t047') }}</h2>
				</div>
				<!-- /.title-one -->
			</div>
			<div class="box-layout-one">
				<div class="event-slider-one">
					<div class="item">
						<div class="card-style-three">
							<div class="d-flex flex-wrap">
								<div class="media-bg position-relative z-1" style="background-image: url({{ $c->img('home_i015') }});"></div>
								<div class="text position-relative">
									<div class="bg-wrapper position-relative h-100">
										<div class="date">{{ $c('home_t048') }}</div>
										<h4><a href="#" class="line-bg">{{ $c('home_t049') }}</a></h4>
										<p>{{ $c('home_t050') }} </p>
										<ul class="style-none">
											<li><i class="fa-regular fa-clock"></i> <span style="background: #cfe3dd;">{{ $c('home_t051') }}</span></li>
											<li><i class="fa-regular fa-location-dot"></i> <span style="background: #f9f2cd;">{{ $c('home_t052') }}</span></li>
										</ul>

										<a href="#" class="details-cta d-flex align-items-center">
											<div class="icon rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="fa-solid fa-angle-right"></i></div>
											<span class="line-bg">{{ $c('home_t053') }}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-style-three -->
					</div>

					<div class="item">
						<div class="card-style-three">
							<div class="d-flex flex-wrap">
								<div class="media-bg position-relative z-1" style="background-image: url({{ $c->img('home_i016') }});"></div>
								<div class="text position-relative">
									<div class="bg-wrapper position-relative h-100">
										<div class="date">{{ $c('home_t054') }}</div>
										<h4><a href="#" class="line-bg">{{ $c('home_t055') }}</a></h4>
										<p>{{ $c('home_t056') }} </p>
										<ul class="style-none">
											<li><i class="fa-regular fa-clock"></i> <span style="background: #cfe3dd;">{{ $c('home_t057') }}</span></li>
											<li><i class="fa-regular fa-location-dot"></i> <span style="background: #f9f2cd;">{{ $c('home_t058') }}</span></li>
										</ul>

										<a href="#" class="details-cta d-flex align-items-center">
											<div class="icon rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="fa-solid fa-angle-right"></i></div>
											<span class="line-bg">{{ $c('home_t059') }}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-style-three -->
					</div>

					<div class="item">
						<div class="card-style-three">
							<div class="d-flex flex-wrap">
								<div class="media-bg position-relative z-1" style="background-image: url({{ $c->img('home_i017') }});"></div>
								<div class="text position-relative">
									<div class="bg-wrapper position-relative h-100">
										<div class="date">{{ $c('home_t060') }}</div>
										<h4><a href="#" class="line-bg">{{ $c('home_t061') }}</a></h4>
										<p>{{ $c('home_t062') }} </p>
										<ul class="style-none">
											<li><i class="fa-regular fa-clock"></i> <span style="background: #cfe3dd;">{{ $c('home_t063') }}</span></li>
											<li><i class="fa-regular fa-location-dot"></i> <span style="background: #f9f2cd;">{{ $c('home_t064') }}</span></li>
										</ul>

										<a href="#" class="details-cta d-flex align-items-center">
											<div class="icon rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="fa-solid fa-angle-right"></i></div>
											<span class="line-bg">{{ $c('home_t065') }}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-style-three -->
					</div>

					<div class="item">
						<div class="card-style-three">
							<div class="d-flex flex-wrap">
								<div class="media-bg position-relative z-1" style="background-image: url({{ $c->img('home_i018') }});"></div>
								<div class="text position-relative">
									<div class="bg-wrapper position-relative h-100">
										<div class="date">{{ $c('home_t066') }}</div>
										<h4><a href="#" class="line-bg">{{ $c('home_t067') }}</a></h4>
										<p>{{ $c('home_t068') }} </p>
										<ul class="style-none">
											<li><i class="fa-regular fa-clock"></i> <span style="background: #cfe3dd;">{{ $c('home_t069') }}</span></li>
											<li><i class="fa-regular fa-location-dot"></i> <span style="background: #f9f2cd;">{{ $c('home_t070') }}</span></li>
										</ul>

										<a href="#" class="details-cta d-flex align-items-center">
											<div class="icon rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="fa-solid fa-angle-right"></i></div>
											<span class="line-bg">{{ $c('home_t071') }}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-style-three -->
					</div>
				</div>

				<div class="text-center mt-65 md-mt-50">
					<a href="#" class="btn-two">{{ $c('home_t072') }}</a>
				</div>
			</div>
			<!-- /.box-layout-one -->

			<div class="event-text-slider-bg mt-130 lg-mt-80">
				<div class="box-layout-one">
					<div class="event-text-slider">
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ $c->img('home_i019') }}" alt="icon" class="me-2">
								<span>{{ $c('home_t073') }}</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ $c->img('home_i020') }}" alt="icon" class="me-2">
								<span>{{ $c('home_t074') }}</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ $c->img('home_i021') }}" alt="icon" class="me-2">
								<span>{{ $c('home_t075') }}</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ $c->img('home_i022') }}" alt="icon" class="me-2">
								<span>{{ $c('home_t076') }}</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ $c->img('home_i023') }}" alt="icon" class="me-2">
								<span>{{ $c('home_t077') }}</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ $c->img('home_i024') }}" alt="icon" class="me-2">
								<span>{{ $c('home_t078') }}</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-layout-one -->
			</div>
			<!-- /.event-text-slider-bg -->
		</div>
		<!-- /.event-section-one -->


		<!--
		=====================================================
			Feedback Section One
		=====================================================
		-->
		<div class="feedback-section-one position-relative z-1 pt-130 lg-pt-80 pb-130 lg-pb-80">
			<div class="container">
				<div class="title-one text-center mb-70 lg-mb-50" data-sal="slide-up" data-sal-duration="900">
					<div class="upper-title">{{ $c('home_t079') }}</div>
					<h2>{{ $c('home_t080') }}</h2>
				</div>
				<!-- /.title-one -->

				<div class="row">
					<div class="col-lg-10 m-auto">
						<div class="feedback-slider-one">
							<div class="item">
								<div class="feedback-wrapper">
									<img src="{{ $c->img('home_i025') }}" alt="" class="avatar rounded-circle m-auto">
									<div class="bg-wrapper">
										<div class="rating">
											<ul class="style-none d-inline-flex justify-content-center">
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
											</ul>
										</div>
										<blockquote>{{ $c('home_t081') }}</blockquote>

										<div class="name-wrapper d-flex align-items-center justify-content-center mb-45">
											<h5 class="name"> {{ $c('home_t082') }}</h5>
											<span>{{ $c('home_t083') }} </span>
										</div>

										<img src="{{ $c->img('home_i026') }}" alt="icon" class="m-auto">
									</div>
									<!-- /.bg-wrapper -->
								</div>
								<!-- /.feedback-wrapper -->
							</div>

							<div class="item">
								<div class="feedback-wrapper">
									<img src="{{ $c->img('home_i027') }}" alt="" class="avatar rounded-circle m-auto">
									<div class="bg-wrapper">
										<div class="rating">
											<ul class="style-none d-inline-flex justify-content-center">
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
											</ul>
										</div>
										<blockquote>{{ $c('home_t084') }}</blockquote>

										<div class="name-wrapper d-flex align-items-center justify-content-center mb-45">
											<h5 class="name"> {{ $c('home_t085') }}</h5>
											<span>{{ $c('home_t086') }} </span>
										</div>

										<img src="{{ $c->img('home_i028') }}" alt="icon" class="m-auto">
									</div>
									<!-- /.bg-wrapper -->
								</div>
								<!-- /.feedback-wrapper -->
							</div>
						</div>
						<!-- /.feedback-slider-one -->
					</div>
				</div>

				<ul class="slider-arrows d-flex justify-content-center style-none position-relative mt-60 md-mt-40">
					<li class="prev_a slick-arrow">
						<i class="fa-solid fa-chevron-left"></i>
					</li>
					<li class="next_a slick-arrow">
						<i class="fa-solid fa-chevron-right"></i>
					</li>
				</ul>
			</div>

			<img src="{{ asset('images/shape/shape_13.png') }}" alt="Shape" class="shapes shape_01">
			<img src="{{ asset('images/shape/shape_14.png') }}" alt="Shape" class="shapes shape_02">
			<img src="{{ $c->img('home_i029') }}" alt="Shape" class="shapes rounded-circle shape_03">
			<img src="{{ $c->img('home_i030') }}" alt="Shape" class="shapes rounded-circle shape_04">
			<img src="{{ $c->img('home_i031') }}" alt="Shape" class="shapes rounded-circle shape_05">
			<img src="{{ $c->img('home_i032') }}" alt="Shape" class="shapes rounded-circle shape_06">
		</div>
		<!-- /.feedback-section-one -->


		<!--
		=====================================================
			Feature Block Four
		=====================================================
		-->
		<div class="feature-block-four position-relative z-1 pt-150 lg-pt-80 pb-140 lg-pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-7" data-sal="slide-right" data-sal-duration="900">
						<div class="pe-xl-4">
							<div class="title-one mb-30">
								<img src="{{ $c->img('home_i033') }}" alt="" class="mb-20">
								<h2>{{ $c('home_t087') }}</h2>
							</div>
							<!-- /.title-one -->

							<p>{{ $c('home_t088') }}</p>
							
							<div class="row">
								<div class="col-lg-6">
									<div class="feature-box mt-20" style="background: #fbf8e8;">
										<div class="d-flex align-items-center">
											<div class="icon rounded-circle"></div>
											<h5>{{ $c('home_t089') }}</h5>
										</div>
										<p class="fs-16">{{ $c('home_t090') }}</p>
									</div>
									<!-- /.feature-box -->
								</div>

								<div class="col-lg-6">
									<div class="feature-box mt-20" style="background: #e0f6ef;">
										<div class="d-flex align-items-center">
											<div class="icon rounded-circle"></div>
											<h5>{{ $c('home_t091') }}</h5>
										</div>
										<p class="fs-16">{{ $c('home_t092') }}</p>
									</div>
									<!-- /.feature-box -->
								</div>
							</div>
							<ul class="style-none d-flex flex-wrap align-items-center justify-content-between mt-30">
								<li class="mt-15"><span>{{ $c('home_t093') }}</span></li>
								<li><a href="{{ route('donations') }}" class="btn-two xs mt-15">{{ $c('home_t094') }}</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 me-auto ms-auto">
						<div class="media-bg rounded-circle" style="background-image: url({{ $c->img('home_i035') }});">
							<div class="card-one d-flex align-items-center">
								<div class="text">
									<div class="main-count"><span class="counter">{{ $c('home_t095') }}</span>{{ $c('home_t096') }}</div>
									<p>{{ $c('home_t097') }}</p>
								</div>
								<img src="{{ $c->img('home_i034') }}" alt="" class="icon">
							</div>
							<!-- /.card-one -->

							<img src="{{ asset('images/shape/shape_15.png') }}" alt="shape" class="shapes shape_01">
							<img src="{{ asset('images/shape/shape_16.png') }}" alt="shape" class="shapes shape_02">
						</div>
						<!-- /.media-bg -->
					</div>
				</div>
			</div>
			<img src="{{ asset('images/shape/shape_17.png') }}" alt="shape" class="shapes shape_03">
		</div>
		<!-- /.feature-block-four -->





		<!--
		=====================================================
			Blog Section One
		=====================================================
		-->
		<div class="blog-section-one pt-130 lg-pt-80 pb-170 lg-pb-80">
			<div class="container">
				<div class="title-one text-center mb-30 lg-mb-10" data-sal="slide-up" data-sal-duration="900">
					<div class="upper-title">{{ $c('home_t098') }}</div>
					<h2>{{ $c('home_t099') }}</h2>
				</div>
				<!-- /.title-one -->
			</div>

			<div class="box-layout-two">
				<div class="row">
					<div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="900">
						<article class="blog-meta-one mt-30">
							<div class="post-info">
								<ul class="style-none post-author d-flex justify-content-center flex-wrap">
									<li><span>{{ $c('home_t100') }}</span></li>
									<li><i class="fa-regular fa-user"></i> <a href="#">{{ $c('home_t101') }}</a></li>
									<li><i class="fa-regular fa-calendar"></i> <a href="#">{{ $c('home_t102') }}</a></li>
								</ul>
							</div>
							<div class="img-meta" style="background-image: url({{ $c->img('home_i036') }});"></div>
							<div class="post-meta">
								<h4 class="blog-title"><a href="#" class="line-bg">{{ $c('home_t103') }}</a></h4>
								<ul class="style-none bottom-widget d-flex flex-wrap">
									<li><a href="#" class="details-cta tran3s">{{ $c('home_t104') }}</a></li>
									<li><i class="fa-regular fa-comment"></i> <a href="#" class="comment">{{ $c('home_t105') }}</a></li>
								</ul>
								
							</div>
							<!-- /.post-meta -->
						</article>
						<!-- /.blog-meta-one -->
					</div>
					<div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="100">
						<article class="blog-meta-one mt-30">
							<div class="post-info">
								<ul class="style-none post-author d-flex justify-content-center flex-wrap">
									<li><span>{{ $c('home_t106') }}</span></li>
									<li><i class="fa-regular fa-user"></i> <a href="#">{{ $c('home_t107') }}</a></li>
									<li><i class="fa-regular fa-calendar"></i> <a href="#">{{ $c('home_t108') }}</a></li>
								</ul>
							</div>
							<div class="img-meta" style="background-image: url({{ $c->img('home_i037') }});"></div>
							<div class="post-meta">
								<h4 class="blog-title"><a href="#" class="line-bg">{{ $c('home_t109') }}</a></h4>
								<ul class="style-none bottom-widget d-flex flex-wrap">
									<li><a href="#" class="details-cta tran3s">{{ $c('home_t110') }}</a></li>
									<li><i class="fa-regular fa-comment"></i> <a href="#" class="comment">{{ $c('home_t111') }}</a></li>
								</ul>
								
							</div>
							<!-- /.post-meta -->
						</article>
						<!-- /.blog-meta-one -->
					</div>
					<div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200">
						<article class="blog-meta-one mt-30">
							<div class="post-info">
								<ul class="style-none post-author d-flex justify-content-center flex-wrap">
									<li><span>{{ $c('home_t112') }}</span></li>
									<li><i class="fa-regular fa-user"></i> <a href="#">{{ $c('home_t113') }}</a></li>
									<li><i class="fa-regular fa-calendar"></i> <a href="#">{{ $c('home_t114') }}</a></li>
								</ul>
							</div>
							<div class="img-meta" style="background-image: url({{ $c->img('home_i038') }});"></div>
							<div class="post-meta">
								<h4 class="blog-title"><a href="#" class="line-bg">{{ $c('home_t115') }}</a></h4>
								<ul class="style-none bottom-widget d-flex flex-wrap">
									<li><a href="#" class="details-cta tran3s">{{ $c('home_t116') }}</a></li>
									<li><i class="fa-regular fa-comment"></i> <a href="#" class="comment">{{ $c('home_t117') }}</a></li>
								</ul>
								
							</div>
							<!-- /.post-meta -->
						</article>
						<!-- /.blog-meta-one -->
					</div>
					<div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="300">
						<article class="blog-meta-one mt-30">
							<div class="post-info">
								<ul class="style-none post-author d-flex justify-content-center flex-wrap">
									<li><span>{{ $c('home_t118') }}</span></li>
									<li><i class="fa-regular fa-user"></i> <a href="#">{{ $c('home_t119') }}</a></li>
									<li><i class="fa-regular fa-calendar"></i> <a href="#">{{ $c('home_t120') }}</a></li>
								</ul>
							</div>
							<div class="img-meta" style="background-image: url({{ $c->img('home_i039') }});"></div>
							<div class="post-meta">
								<h4 class="blog-title"><a href="#" class="line-bg">{{ $c('home_t121') }}</a></h4>
								<ul class="style-none bottom-widget d-flex flex-wrap">
									<li><a href="#" class="details-cta tran3s">{{ $c('home_t122') }}</a></li>
									<li><i class="fa-regular fa-comment"></i> <a href="#" class="comment">{{ $c('home_t123') }}</a></li>
								</ul>
								
							</div>
							<!-- /.post-meta -->
						</article>
						<!-- /.blog-meta-one -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.blog-section-one -->


		<!--
		=====================================================
			Fancy Banner One
		=====================================================
		-->
		<div class="fancy-banner-one position-relative z-2 style-one">
			<div class="box-layout-two">
				<div class="bg-wrapper position-relative z-1">
					<div class="container">
						<div class="row">
							<div class="col-xxl-8 col-xl-6 col-lg-7">
								<div class="title-one mb-25 lg-mb-20" data-sal="slide-up" data-sal-duration="900">
									<h2 class="text-white">{{ $c('home_t124') }}</h2>
								</div>
								<!-- /.title-one -->
								<p class="fw-500 text-white mb-50 lg-mb-30">{{ $c('home_t125') }} </p>
								<form action="#" class="position-relative z-1">
									<input type="email" placeholder="Email Address">
									<button>{{ $c('home_t126') }}</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /.bg-wrapper -->
			</div>
			<!-- /.box-layout-two -->
		</div>
		<!-- /.fancy-banner-one -->



		
@endsection
