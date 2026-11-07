@extends('layouts.app', ['header' => 'home', 'footer' => 'one'])
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp

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
							<a href="{{ route('donations') }}" class="btn-one">Donation Now</a>
						</div>
						<div class="avatar-group mt-35" data-sal="slide-up" data-sal-duration="900" data-sal-delay="900">
							<ul class="style-none d-flex align-items-center">
								<li><img src="{{ asset('images/media/img_01.jpg') }}" alt="" class="avatar rounded-circle"></li>
								<li><img src="{{ asset('images/media/img_02.jpg') }}" alt="" class="avatar rounded-circle"></li>
								<li><img src="{{ asset('images/media/img_03.jpg') }}" alt="" class="avatar rounded-circle"></li>
								<li class="fs-20">Join 15000+ global partners who’ve reached</li>
							</ul>
						</div>
						<!-- /.avatar-group -->
					</div>
				</div>

				<div class="media-wrapper" data-sal="slide-left" data-sal-duration="900" data-sal-delay="500">
					<img src="{{ asset('images/media/img_04.png') }}" alt="Main Image">
					<div class="card-wrapper d-flex align-items-center">
						<div class="icon rounded-circle d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up-right"></i></div>
						<p class="font-amita">Join 1000+ People Donation</p>
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
							<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_01.png') }}" alt="" class="m-auto"></div>
							<h4>Work During The <br> Pandemic</h4>
						</div>
						<!-- /.card-style-one -->
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200">
						<div class="card-style-one text-center position-relative z-1 tran3s mt-25 border-style">
							<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_02.png') }}" alt="" class="m-auto"></div>
							<h4>Together We <br> Change Lives</h4>
						</div>
						<!-- /.card-style-one -->
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="400">
						<div class="card-style-one text-center position-relative z-1 tran3s mt-25 border-style">
							<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_03.png') }}" alt="" class="m-auto"></div>
							<h4>The smart Easy <br> Way To Give</h4>
						</div>
						<!-- /.card-style-one -->
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="900" data-sal-delay="600">
						<div class="card-style-one text-center position-relative z-1 tran3s mt-25">
							<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_04.png') }}" alt="" class="m-auto"></div>
							<h4>Be the Reason <br> Someone Smiles</h4>
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
								<div class="upper-title">About us</div>
								<h2>Together, We Create A Better Tomorrow</h2>
							</div>
							<!-- /.title-one -->
							<div class="row">
								<div class="col-xl-11">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
									<ul class="style-none list-style-one d-flex flex-wrap pt-10">
										<li>Raised For Charities</li>
										<li>Send a gift for childrens</li>
										<li>Registered Charities Supported</li>
										<li>Work During the Pandemic</li>
									</ul>
									<!-- /.list-style-one -->
									<p class="mb-45 mt-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
									<a href="{{ route('about') }}" class="btn-two">More About us</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 me-auto ms-auto d-flex" data-sal="slide-left" data-sal-duration="900">
						<div class="media-bg position-relative z-1 w-100" style="background-image: url({{ asset('images/media/img_04.jpg') }});">
							<div class="card-one d-flex align-items-center">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_05.png') }}" alt=""></div>
								<div class="text">
									<div class="main-count"><span class="counter">40000</span>+</div>
									<p>children meals served</p>
								</div>
							</div>
							<!-- /.card-one -->
							<div class="card-two text-center">
								<div class="main-count"><span class="counter">1.6</span>mi+</div>
								<p>Happy children </p>
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
							<div class="main-count"><span class="counter">768</span>+</div>
							<p>Registered Charities Supported</p>
						</div>
						<!-- /.counter-block-one -->
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="counter-block-one text-center mt-30" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200">
							<div class="main-count">$<span class="counter">461</span>m</div>
							<p>Raised For Over 2,700 Charities</p>
						</div>
						<!-- /.counter-block-one -->
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="counter-block-one text-center mt-30" data-sal="slide-up" data-sal-duration="900" data-sal-delay="400">
							<div class="main-count"><span class="counter">13</span>million</div>
							<p>Receive Donation from worldwide</p>
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
					<div class="upper-title">Begin Giving To Them</div>
					<h2>Explore These Causes</h2>
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
					<div class="item"><p class="text-center">No campaigns yet.</p></div>
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
								<div class="upper-title">Make A Difference Today</div>
								<h2>Make A Difference Today Join Mission </h2>
							</div>
							<!-- /.title-one -->
							<p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration dolore magna. We started charity in 2001 with a simple idea: to enable global philanthropy by empowering</p>
							<div class="card-one d-flex align-items-center mt-30 mb-50 lg-mb-30">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_06.png') }}" alt=""></div>
								<div class="text">
									<div class="main-count font-amita">$<span class="counter">1,023</span>M</div>
									<p class="fs-16 fw-500">Dollar giving more than 15 years</p>
								</div>
							</div>
							<!-- /.card-one -->
							<ul class="style-none list-style-two d-flex flex-wrap">
								<li><span>Our mission, vision, and the heart behind it all</span></li>
								<li><span>GivenGain is the global leader in online fundraising.</span></li>
							</ul>
							<!-- /.list-style-two -->

							<div class="sucess-score mt-35">
								<p>Success Case</p>
								<div class="progress-bar position-relative">
									<div class="progress position-relative" style="width: 65%;">
										<span>65%</span>
									</div>
								</div>
								<!-- /.progress-bar -->
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 me-auto ms-auto d-flex" data-sal="slide-right" data-sal-duration="900">
						<div class="media-bg position-relative z-1 w-100" style="background-image: url({{ asset('images/media/img_09.jpg') }});">
							<div class="card-one d-flex align-items-center">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_05.png') }}" alt=""></div>
								<div class="text">
									<div class="main-count"><span class="counter">39,976</span>+</div>
									<p>Project Done</p>
								</div>
							</div>
							<!-- /.card-one -->

							<div class="years">
								<img src="{{ asset('images/assets/sticker.png') }}" alt="">
								<span class="counter">12</span>
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
					<div class="upper-title">Events & programs</div>
					<h2>Latest Upcoming Events</h2>
				</div>
				<!-- /.title-one -->
			</div>
			<div class="box-layout-one">
				<div class="event-slider-one">
					<div class="item">
						<div class="card-style-three">
							<div class="d-flex flex-wrap">
								<div class="media-bg position-relative z-1" style="background-image: url({{ asset('images/media/img_10.jpg') }});"></div>
								<div class="text position-relative">
									<div class="bg-wrapper position-relative h-100">
										<div class="date">12 June 2025</div>
										<h4><a href="#" class="line-bg">Voices for Change: Benefit Concert</a></h4>
										<p>Lorem ipsum dolor sit amet event to consectetur adipiscing elit slacus </p>
										<ul class="style-none">
											<li><i class="fa-regular fa-clock"></i> <span style="background: #cfe3dd;">9.00 am - 2 pm</span></li>
											<li><i class="fa-regular fa-location-dot"></i> <span style="background: #f9f2cd;">Nort Road, United State</span></li>
										</ul>

										<a href="#" class="details-cta d-flex align-items-center">
											<div class="icon rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="fa-solid fa-angle-right"></i></div>
											<span class="line-bg">Details Events</span>
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
								<div class="media-bg position-relative z-1" style="background-image: url({{ asset('images/media/img_11.jpg') }});"></div>
								<div class="text position-relative">
									<div class="bg-wrapper position-relative h-100">
										<div class="date">12 June 2025</div>
										<h4><a href="#" class="line-bg">Hope in Action: Annual Charity Gala</a></h4>
										<p>Lorem ipsum dolor sit amet event to consectetur adipiscing elit slacus </p>
										<ul class="style-none">
											<li><i class="fa-regular fa-clock"></i> <span style="background: #cfe3dd;">9.00 am - 2 pm</span></li>
											<li><i class="fa-regular fa-location-dot"></i> <span style="background: #f9f2cd;">Nort Road, United State</span></li>
										</ul>

										<a href="#" class="details-cta d-flex align-items-center">
											<div class="icon rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="fa-solid fa-angle-right"></i></div>
											<span class="line-bg">Details Events</span>
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
								<div class="media-bg position-relative z-1" style="background-image: url({{ asset('images/media/img_12.jpg') }});"></div>
								<div class="text position-relative">
									<div class="bg-wrapper position-relative h-100">
										<div class="date">12 June 2025</div>
										<h4><a href="#" class="line-bg">Move for Good: Fitness for Fundraising</a></h4>
										<p>Lorem ipsum dolor sit amet event to consectetur adipiscing elit slacus </p>
										<ul class="style-none">
											<li><i class="fa-regular fa-clock"></i> <span style="background: #cfe3dd;">9.00 am - 2 pm</span></li>
											<li><i class="fa-regular fa-location-dot"></i> <span style="background: #f9f2cd;">Nort Road, United State</span></li>
										</ul>

										<a href="#" class="details-cta d-flex align-items-center">
											<div class="icon rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="fa-solid fa-angle-right"></i></div>
											<span class="line-bg">Details Events</span>
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
								<div class="media-bg position-relative z-1" style="background-image: url({{ asset('images/media/img_11.jpg') }});"></div>
								<div class="text position-relative">
									<div class="bg-wrapper position-relative h-100">
										<div class="date">12 June 2025</div>
										<h4><a href="#" class="line-bg">Hope in Action: Annual Charity Gala</a></h4>
										<p>Lorem ipsum dolor sit amet event to consectetur adipiscing elit slacus </p>
										<ul class="style-none">
											<li><i class="fa-regular fa-clock"></i> <span style="background: #cfe3dd;">9.00 am - 2 pm</span></li>
											<li><i class="fa-regular fa-location-dot"></i> <span style="background: #f9f2cd;">Nort Road, United State</span></li>
										</ul>

										<a href="#" class="details-cta d-flex align-items-center">
											<div class="icon rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="fa-solid fa-angle-right"></i></div>
											<span class="line-bg">Details Events</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-style-three -->
					</div>
				</div>

				<div class="text-center mt-65 md-mt-50">
					<a href="#" class="btn-two">View more event</a>
				</div>
			</div>
			<!-- /.box-layout-one -->

			<div class="event-text-slider-bg mt-130 lg-mt-80">
				<div class="box-layout-one">
					<div class="event-text-slider">
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ asset('images/icon/icon_08.png') }}" alt="icon" class="me-2">
								<span>Volunteer</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ asset('images/icon/icon_08.png') }}" alt="icon" class="me-2">
								<span>Fundraise</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ asset('images/icon/icon_08.png') }}" alt="icon" class="me-2">
								<span>Campaign</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ asset('images/icon/icon_08.png') }}" alt="icon" class="me-2">
								<span>Humanity</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ asset('images/icon/icon_08.png') }}" alt="icon" class="me-2">
								<span>Change Lives</span>
							</div>
						</div>
						<div class="item">
							<div class="d-flex align-items-center justify-content-center">
								<img src="{{ asset('images/icon/icon_08.png') }}" alt="icon" class="me-2">
								<span>Campaign</span>
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
					<div class="upper-title">Testimonial</div>
					<h2>Real feedback, Real results</h2>
				</div>
				<!-- /.title-one -->

				<div class="row">
					<div class="col-lg-10 m-auto">
						<div class="feedback-slider-one">
							<div class="item">
								<div class="feedback-wrapper">
									<img src="{{ asset('images/media/img_13.jpg') }}" alt="" class="avatar rounded-circle m-auto">
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
										<blockquote>"I never thought I’d be able to go back to school. Their support changed my life and gave me a future I can be proud of."</blockquote>

										<div class="name-wrapper d-flex align-items-center justify-content-center mb-45">
											<h5 class="name"> Elena M., Ukraine</h5>
											<span>Charity Volunteer </span>
										</div>

										<img src="{{ asset('images/icon/icon_09.png') }}" alt="icon" class="m-auto">
									</div>
									<!-- /.bg-wrapper -->
								</div>
								<!-- /.feedback-wrapper -->
							</div>

							<div class="item">
								<div class="feedback-wrapper">
									<img src="{{ asset('images/media/img_13.jpg') }}" alt="" class="avatar rounded-circle m-auto">
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
										<blockquote>"I never thought I’d be able to go back to school. Their support changed my life and gave me a future I can be proud of."</blockquote>

										<div class="name-wrapper d-flex align-items-center justify-content-center mb-45">
											<h5 class="name"> Elena M., Ukraine</h5>
											<span>Charity Volunteer </span>
										</div>

										<img src="{{ asset('images/icon/icon_09.png') }}" alt="icon" class="m-auto">
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
			<img src="{{ asset('images/media/img_14.jpg') }}" alt="Shape" class="shapes rounded-circle shape_03">
			<img src="{{ asset('images/media/img_15.jpg') }}" alt="Shape" class="shapes rounded-circle shape_04">
			<img src="{{ asset('images/media/img_16.jpg') }}" alt="Shape" class="shapes rounded-circle shape_05">
			<img src="{{ asset('images/media/img_17.jpg') }}" alt="Shape" class="shapes rounded-circle shape_06">
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
								<img src="{{ asset('images/icon/icon_10.png') }}" alt="" class="mb-20">
								<h2>Donate Now To Make An Impact</h2>
							</div>
							<!-- /.title-one -->

							<p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration dolore magna. We started charity in 2001 with a simple idea: to enable global philanthropy by empowering</p>
							
							<div class="row">
								<div class="col-lg-6">
									<div class="feature-box mt-20" style="background: #fbf8e8;">
										<div class="d-flex align-items-center">
											<div class="icon rounded-circle"></div>
											<h5>Giving Love & Pair</h5>
										</div>
										<p class="fs-16">Give everything of yourself to those you love and if there is anything left</p>
									</div>
									<!-- /.feature-box -->
								</div>

								<div class="col-lg-6">
									<div class="feature-box mt-20" style="background: #e0f6ef;">
										<div class="d-flex align-items-center">
											<div class="icon rounded-circle"></div>
											<h5>Volunteering</h5>
										</div>
										<p class="fs-16">Give everything of yourself to those you love and if there is anything left</p>
									</div>
									<!-- /.feature-box -->
								</div>
							</div>
							<ul class="style-none d-flex flex-wrap align-items-center justify-content-between mt-30">
								<li class="mt-15"><span>Let’s Raise $10,000 to Bring Water to 500 People</span></li>
								<li><a href="{{ route('donations') }}" class="btn-two xs mt-15">Donation Now</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-5 col-md-8 me-auto ms-auto">
						<div class="media-bg rounded-circle" style="background-image: url({{ asset('images/media/img_18.jpg') }});">
							<div class="card-one d-flex align-items-center">
								<div class="text">
									<div class="main-count"><span class="counter">10</span>k+</div>
									<p>Done homeless case</p>
								</div>
								<img src="{{ asset('images/icon/icon_12.png') }}" alt="" class="icon">
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
					<div class="upper-title">News Update</div>
					<h2>Latest News & Articles</h2>
				</div>
				<!-- /.title-one -->
			</div>

			<div class="box-layout-two">
				<div class="row">
					<div class="col-xl-3 col-md-6" data-sal="slide-up" data-sal-duration="900">
						<article class="blog-meta-one mt-30">
							<div class="post-info">
								<ul class="style-none post-author d-flex justify-content-center flex-wrap">
									<li><span>Charity</span></li>
									<li><i class="fa-regular fa-user"></i> <a href="#">M Riad</a></li>
									<li><i class="fa-regular fa-calendar"></i> <a href="#">25 Nov 2025</a></li>
								</ul>
							</div>
							<div class="img-meta" style="background-image: url({{ asset('images/blog/blog_img_01.jpg') }});"></div>
							<div class="post-meta">
								<h4 class="blog-title"><a href="#" class="line-bg">Behind the Scenes: How Your Donations Are Used</a></h4>
								<ul class="style-none bottom-widget d-flex flex-wrap">
									<li><a href="#" class="details-cta tran3s">Details More</a></li>
									<li><i class="fa-regular fa-comment"></i> <a href="#" class="comment">08 Comment</a></li>
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
									<li><span>Charity</span></li>
									<li><i class="fa-regular fa-user"></i> <a href="#">M Riad</a></li>
									<li><i class="fa-regular fa-calendar"></i> <a href="#">25 Nov 2025</a></li>
								</ul>
							</div>
							<div class="img-meta" style="background-image: url({{ asset('images/blog/blog_img_02.jpg') }});"></div>
							<div class="post-meta">
								<h4 class="blog-title"><a href="#" class="line-bg">Behind the Scenes: How Your Donations Are Used</a></h4>
								<ul class="style-none bottom-widget d-flex flex-wrap">
									<li><a href="#" class="details-cta tran3s">Details More</a></li>
									<li><i class="fa-regular fa-comment"></i> <a href="#" class="comment">08 Comment</a></li>
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
									<li><span>Charity</span></li>
									<li><i class="fa-regular fa-user"></i> <a href="#">M Riad</a></li>
									<li><i class="fa-regular fa-calendar"></i> <a href="#">25 Nov 2025</a></li>
								</ul>
							</div>
							<div class="img-meta" style="background-image: url({{ asset('images/blog/blog_img_03.jpg') }});"></div>
							<div class="post-meta">
								<h4 class="blog-title"><a href="#" class="line-bg">Behind the Scenes: How Your Donations Are Used</a></h4>
								<ul class="style-none bottom-widget d-flex flex-wrap">
									<li><a href="#" class="details-cta tran3s">Details More</a></li>
									<li><i class="fa-regular fa-comment"></i> <a href="#" class="comment">08 Comment</a></li>
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
									<li><span>Charity</span></li>
									<li><i class="fa-regular fa-user"></i> <a href="#">M Riad</a></li>
									<li><i class="fa-regular fa-calendar"></i> <a href="#">25 Nov 2025</a></li>
								</ul>
							</div>
							<div class="img-meta" style="background-image: url({{ asset('images/blog/blog_img_04.jpg') }});"></div>
							<div class="post-meta">
								<h4 class="blog-title"><a href="#" class="line-bg">Behind the Scenes: How Your Donations Are Used</a></h4>
								<ul class="style-none bottom-widget d-flex flex-wrap">
									<li><a href="#" class="details-cta tran3s">Details More</a></li>
									<li><i class="fa-regular fa-comment"></i> <a href="#" class="comment">08 Comment</a></li>
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
									<h2 class="text-white">Subscribe for Updates Stories & Impact</h2>
								</div>
								<!-- /.title-one -->
								<p class="fw-500 text-white mb-50 lg-mb-30">Subscribe our newsletter get the latest news other tips </p>
								<form action="#" class="position-relative z-1">
									<input type="email" placeholder="Email Address">
									<button>Subscribe</button>
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
