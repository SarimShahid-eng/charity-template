@extends('layouts.app', ['header' => 'inner', 'footer' => 'two'])
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp
@php $c = \App\Support\Content::make(); @endphp

@section('title', 'About Us - ' . $s['site_name'])

@section('content')
		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		<div class="inner-banner-one header-space-fix-three text-center position-relative z-1" style="background-image: url({{ $c->img('about_banner') }});">
            <div class="container">
                <h2>{{ $c('about_t001') }}</h2>
                <div class="breadcrumb-content">
                    <ul class="style-none d-inline-flex justify-content-center position-relative z-1">
                        <li><a href="{{ route('home') }}">{{ $c('about_t002') }}</a></li>
                        <li>-</li>
                        <li>{{ $c('about_t003') }}</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('images/shape/shape_43.png') }}" alt="shape" class="shapes shape_01">
		</div>
		<!-- /.inner-banner-one -->





		<!--
		=====================================================
			Feature Block Two
		=====================================================
		-->
		<div class="feature-block-two position-relative z-1 pt-140 lg-pt-80 pb-130 lg-pb-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 d-flex" data-sal="slide-right" data-sal-duration="900">
						<div class="pe-lg-5 w-100">
							<div class="title-one mb-30">
								<div class="upper-title">{{ $c('about_t004') }}</div>
								<h2>{{ $c('about_t005') }}</h2>
							</div>
							<!-- /.title-one -->
							<div class="row">
								<div class="col-xxl-11">
									<p>{{ $c('about_t006') }}</p>
									<ul class="style-none list-style-one d-flex flex-wrap pt-10">
										<li>{{ $c('about_t007') }}</li>
										<li>{{ $c('about_t008') }}</li>
										<li>{{ $c('about_t009') }}</li>
										<li>{{ $c('about_t010') }}</li>
									</ul>
									<!-- /.list-style-one -->
									<p class="mb-45 mt-30">{{ $c('about_t011') }}</p>
									<a href="#" class="btn-two">{{ $c('about_t012') }}</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 me-auto ms-auto d-flex" data-sal="slide-left" data-sal-duration="900">
						<div class="media-bg position-relative z-1 w-100" style="background-image: url({{ $c->img('about_i002') }});">
							<div class="card-one d-flex align-items-center">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('about_i001') }}" alt=""></div>
								<div class="text">
									<div class="main-count"><span class="counter">{{ $c('about_t013') }}</span>+</div>
									<p>{{ $c('about_t014') }}</p>
								</div>
							</div>
							<!-- /.card-one -->
							<div class="card-two text-center">
								<div class="main-count"><span class="counter">{{ $c('about_t015') }}</span>{{ $c('about_t016') }}</div>
								<p>{{ $c('about_t017') }} </p>
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



		<!--
		=====================================================
			Feature Block Seven
		=====================================================
		-->
		<div class="feature-block-seven position-relative pt-120 lg-pt-50 pb-100 lg-pb-70">
			<div class="box-layout-two">
				<div class="box-wrapper d-flex flex-wrap align-items-center justify-content-between">
					<div class="card-box mt-25" data-sal="slide-up" data-sal-duration="900">
						<div class="icon rounded-circle m-auto d-flex align-items-center justify-content-center"><img src="{{ $c->img('about_i003') }}" alt=""></div>
						<h5>{{ $c('about_t018') }}</h5>
					</div>
					<!-- /.card-box -->

					<div class="card-box mt-25" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200">
						<div class="icon rounded-circle m-auto d-flex align-items-center justify-content-center"><img src="{{ $c->img('about_i004') }}" alt=""></div>
						<h5>{{ $c('about_t019') }}</h5>
					</div>
					<!-- /.card-box -->

					<div class="card-box mt-25" data-sal="slide-up" data-sal-duration="900" data-sal-delay="400">
						<div class="icon rounded-circle m-auto d-flex align-items-center justify-content-center"><img src="{{ $c->img('about_i005') }}" alt=""></div>
						<h5>{{ $c('about_t020') }}</h5>
					</div>
					<!-- /.card-box -->

					<div class="card-box mt-25" data-sal="slide-up" data-sal-duration="900" data-sal-delay="600">
						<div class="icon rounded-circle m-auto d-flex align-items-center justify-content-center"><img src="{{ $c->img('about_i006') }}" alt=""></div>
						<h5>{{ $c('about_t021') }}</h5>
					</div>
					<!-- /.card-box -->
				</div>
				<!-- /.box-wrapper -->
			</div>
			<!-- /.box-layout-two -->
		</div>
		<!-- /.feature-block-seven -->



		<!--
		=====================================================
			Counter Sectiom One
		=====================================================
		-->
		<div class="counter-section-one position-relative z-2">
			<div class="bg-wrapper">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-4 col-sm-6">
							<div class="counter-block-one text-center mt-30" data-sal="slide-up" data-sal-duration="900">
								<div class="main-count"><span class="counter">{{ $c('about_t022') }}</span>+</div>
								<p>{{ $c('about_t023') }}</p>
							</div>
							<!-- /.counter-block-one -->
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="counter-block-one text-center mt-30" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200">
								<div class="main-count">$<span class="counter">{{ $c('about_t024') }}</span>{{ $c('about_t025') }}</div>
								<p>{{ $c('about_t026') }}</p>
							</div>
							<!-- /.counter-block-one -->
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="counter-block-one text-center mt-30" data-sal="slide-up" data-sal-duration="900" data-sal-delay="400">
								<div class="main-count"><span class="counter">{{ $c('about_t027') }}</span>{{ $c('about_t028') }}</div>
								<p>{{ $c('about_t029') }}</p>
							</div>
							<!-- /.counter-block-one -->
						</div>
					</div>
				</div>
			</div>
			<!-- /.bg-wrapper -->
		</div>


		<!--
		=====================================================
			Feature Block Three
		=====================================================
		-->
		<div class="feature-block-three bg-color position-relative z-1 pt-300 lg-pt-200 pb-200 lg-pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 d-flex order-lg-last" data-sal="slide-left" data-sal-duration="900">
						<div class="ps-lg-5 w-100">
							<div class="title-one mb-30">
								<div class="upper-title">{{ $c('about_t030') }}</div>
								<h2>{{ $c('about_t031') }} </h2>
							</div>
							<!-- /.title-one -->
							<p>{{ $c('about_t032') }}</p>
							<div class="card-one d-flex align-items-center mt-30 mb-50 lg-mb-30">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('about_i007') }}" alt=""></div>
								<div class="text">
									<div class="main-count font-amita">$<span class="counter">{{ $c('about_t033') }}</span>{{ $c('about_t034') }}</div>
									<p class="fs-16 fw-500">{{ $c('about_t035') }}</p>
								</div>
							</div>
							<!-- /.card-one -->
							<ul class="style-none list-style-two d-flex flex-wrap">
								<li><span>{{ $c('about_t036') }}</span></li>
								<li><span>{{ $c('about_t037') }}</span></li>
							</ul>
							<!-- /.list-style-two -->

							<div class="sucess-score mt-35">
								<p>{{ $c('about_t038') }}</p>
								<div class="progress-bar position-relative">
									<div class="progress position-relative" style="width: 65%;">
										<span>{{ $c('about_t039') }}</span>
									</div>
								</div>
								<!-- /.progress-bar -->
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 me-auto ms-auto d-flex" data-sal="slide-right" data-sal-duration="900">
						<div class="media-bg position-relative z-1 w-100" style="background-image: url({{ $c->img('about_i009') }});">
							<div class="card-one d-flex align-items-center">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ $c->img('about_i008') }}" alt=""></div>
								<div class="text">
									<div class="main-count"><span class="counter">{{ $c('about_t040') }}</span>+</div>
									<p>{{ $c('about_t041') }}</p>
								</div>
							</div>
							<!-- /.card-one -->

							<div class="years">
								<img src="{{ $c->img('about_i010') }}" alt="">
								<span class="counter">{{ $c('about_t042') }}</span>
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
			Feedback Section Two
		=====================================================
		-->
		<div class="feedback-section-two position-relative z-1 pt-130 lg-pt-80 pb-110 lg-pb-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 m-auto">
						<div class="title-one text-center mb-65 lg-mb-50" data-sal="slide-up" data-sal-duration="900">
							<div class="upper-title">{{ $c('about_t043') }}</div>
							<h2>{{ $c('about_t044') }}</h2>
						</div>
						<!-- /.title-one -->
					</div>
				</div>
			</div>

			<div class="box-layout-one">
				<div class="feedback-slider-two">
					<div class="item">
						<div class="feedback-wrapper position-relative z-1" style="background: #edf7f3;">
							<img src="{{ $c->img('about_i011') }}" alt="icon" class="icon">
							<div class="d-flex align-items-center">
								<img src="{{ $c->img('about_i012') }}" alt="avatar" class="avatar rounded-circle">
								<div class="name">
									<h5>{{ $c('about_t045') }}</h5>
									<span class="fs-16">{{ $c('about_t046') }} </span>
								</div>
							</div>
							<h4 class="font-amita">{{ $c('about_t047') }}</h4>
							<blockquote>{{ $c('about_t048') }}</blockquote>
							<div class="d-flex justify-content-between">
								<div class="rating">
									<ul class="style-none d-inline-flex align-items-center justify-content-center">
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
									</ul>
								</div>
								<ul class="social-icon d-flex align-items-center justify-content-center style-none">
									<li>
										<a href="#"><img src="{{ $c->img('about_i013') }}" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="{{ $c->img('about_i014') }}" alt=""></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.feedback-wrapper -->
					</div>
					<div class="item">
						<div class="feedback-wrapper position-relative z-1" style="background: #fbf8e6;">
							<img src="{{ $c->img('about_i015') }}" alt="icon" class="icon">
							<div class="d-flex align-items-center">
								<img src="{{ $c->img('about_i016') }}" alt="avatar" class="avatar rounded-circle">
								<div class="name">
									<h5>{{ $c('about_t049') }}</h5>
									<span class="fs-16">{{ $c('about_t050') }} </span>
								</div>
							</div>
							<h4 class="font-amita">{{ $c('about_t051') }}</h4>
							<blockquote>{{ $c('about_t052') }}</blockquote>
							<div class="d-flex justify-content-between">
								<div class="rating">
									<ul class="style-none d-inline-flex align-items-center justify-content-center">
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
									</ul>
								</div>
								<ul class="social-icon d-flex align-items-center justify-content-center style-none">
									<li>
										<a href="#"><img src="{{ $c->img('about_i017') }}" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="{{ $c->img('about_i018') }}" alt=""></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.feedback-wrapper -->
					</div>
					<div class="item">
						<div class="feedback-wrapper position-relative z-1" style="background: #edf7f3;">
							<img src="{{ $c->img('about_i019') }}" alt="icon" class="icon">
							<div class="d-flex align-items-center">
								<img src="{{ $c->img('about_i020') }}" alt="avatar" class="avatar rounded-circle">
								<div class="name">
									<h5>{{ $c('about_t053') }} </h5>
									<span class="fs-16">{{ $c('about_t054') }} </span>
								</div>
							</div>
							<h4 class="font-amita">{{ $c('about_t055') }}</h4>
							<blockquote>{{ $c('about_t056') }}</blockquote>
							<div class="d-flex justify-content-between">
								<div class="rating">
									<ul class="style-none d-inline-flex align-items-center justify-content-center">
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
									</ul>
								</div>
								<ul class="social-icon d-flex align-items-center justify-content-center style-none">
									<li>
										<a href="#"><img src="{{ $c->img('about_i021') }}" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="{{ $c->img('about_i022') }}" alt=""></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.feedback-wrapper -->
					</div>
					<div class="item">
						<div class="feedback-wrapper position-relative z-1" style="background: #fbf8e6;">
							<img src="{{ $c->img('about_i023') }}" alt="icon" class="icon">
							<div class="d-flex align-items-center">
								<img src="{{ $c->img('about_i024') }}" alt="avatar" class="avatar rounded-circle">
								<div class="name">
									<h5>{{ $c('about_t057') }}</h5>
									<span class="fs-16">{{ $c('about_t058') }} </span>
								</div>
							</div>
							<h4 class="font-amita">{{ $c('about_t059') }}</h4>
							<blockquote>{{ $c('about_t060') }}</blockquote>
							<div class="d-flex justify-content-between">
								<div class="rating">
									<ul class="style-none d-inline-flex align-items-center justify-content-center">
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
									</ul>
								</div>
								<ul class="social-icon d-flex align-items-center justify-content-center style-none">
									<li>
										<a href="#"><img src="{{ $c->img('about_i025') }}" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="{{ $c->img('about_i026') }}" alt=""></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.feedback-wrapper -->
					</div>
				</div>
			</div>
			<!-- /.box-layout-one -->

			<div class="container">
				<ul class="slider-arrows d-flex justify-content-center style-none position-relative mt-60 md-mt-40">
					<li class="prev_b slick-arrow">
						<i class="fa-solid fa-chevron-left"></i>
					</li>
					<li class="next_b slick-arrow">
						<i class="fa-solid fa-chevron-right"></i>
					</li>
				</ul>
			</div>
		</div>
		<!-- /.feedback-section-two -->


        <div class="event-text-slider-bg">
			<div class="box-layout-one">
				<div class="event-text-slider">
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>{{ $c('about_t061') }}</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>{{ $c('about_t062') }}</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>{{ $c('about_t063') }}</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>{{ $c('about_t064') }}</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>{{ $c('about_t065') }}</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>{{ $c('about_t066') }}</span>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-layout-one -->
		</div>
		<!-- /.event-text-slider-bg -->




		<!--
		=====================================================
			Feature Block Eight
		=====================================================
		-->
		<div class="feature-block-eight pt-130 lg-pt-80 pb-140 lg-pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-5" data-sal="slide-right" data-sal-duration="900">
						<div class="pe-lg-5">
							<div class="title-one mb-25">
								<div class="upper-title">{{ $c('about_t067') }}</div>
								<h2>{{ $c('about_t068') }}</h2>
							</div>
							<!-- /.title-one -->

							<p class="pe-xxl-4 mb-10">{{ $c('about_t069') }}</p>
							<p class="fw-500 mb-25">{{ $c('about_t070') }}</p>
							<a href="{{ route('contact') }}" class="btn-two">{{ $c('about_t071') }}</a>
						</div>
					</div>
					<div class="col-lg-7 ms-auto" data-sal="slide-left" data-sal-duration="900">
						<div class="accordion accordion-style-one md-mt-40" id="accordionOne">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                       {{ $c('about_t072') }}
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>{{ $c('about_t073') }}</p>
                                    </div>
                                  </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{ $c('about_t074') }}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>{{ $c('about_t075') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        {{ $c('about_t076') }}
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>{{ $c('about_t077') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                       {{ $c('about_t078') }}
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>{{ $c('about_t079') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.accordion-style-one -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.feature-block-eight -->



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
									<h2 class="text-white">{{ $c('about_t080') }}</h2>
								</div>
								<!-- /.title-one -->
								<p class="fw-500 mb-50 lg-mb-30">{{ $c('about_t081') }} </p>
								<form action="#" class="position-relative z-1">
									<input type="email" placeholder="Email Address">
									<button>{{ $c('about_t082') }}</button>
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
