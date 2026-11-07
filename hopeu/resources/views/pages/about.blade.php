@extends('layouts.app', ['header' => 'inner', 'footer' => 'two'])
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp

@section('title', 'About Us - ' . $s['site_name'])

@section('content')
		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		<div class="inner-banner-one header-space-fix-three text-center position-relative z-1">
            <div class="container">
                <h2>About us</h2>
                <div class="breadcrumb-content">
                    <ul class="style-none d-inline-flex justify-content-center position-relative z-1">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>-</li>
                        <li>About us</li>
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
								<div class="upper-title">About us</div>
								<h2>Together, We Create A Better Tomorrow</h2>
							</div>
							<!-- /.title-one -->
							<div class="row">
								<div class="col-xxl-11">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
									<ul class="style-none list-style-one d-flex flex-wrap pt-10">
										<li>Raised For Charities</li>
										<li>Send a gift for childrens</li>
										<li>Registered Charities Supported</li>
										<li>Work During the Pandemic</li>
									</ul>
									<!-- /.list-style-one -->
									<p class="mb-45 mt-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
									<a href="#" class="btn-two">More About us</a>
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



		<!--
		=====================================================
			Feature Block Seven
		=====================================================
		-->
		<div class="feature-block-seven position-relative pt-120 lg-pt-50 pb-100 lg-pb-70">
			<div class="box-layout-two">
				<div class="box-wrapper d-flex flex-wrap align-items-center justify-content-between">
					<div class="card-box mt-25" data-sal="slide-up" data-sal-duration="900">
						<div class="icon rounded-circle m-auto d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_25.png') }}" alt=""></div>
						<h5>Work During The Pandemic</h5>
					</div>
					<!-- /.card-box -->

					<div class="card-box mt-25" data-sal="slide-up" data-sal-duration="900" data-sal-delay="200">
						<div class="icon rounded-circle m-auto d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_26.png') }}" alt=""></div>
						<h5>Together We Change Lives</h5>
					</div>
					<!-- /.card-box -->

					<div class="card-box mt-25" data-sal="slide-up" data-sal-duration="900" data-sal-delay="400">
						<div class="icon rounded-circle m-auto d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_27.png') }}" alt=""></div>
						<h5>The smart Easy Way To Give</h5>
					</div>
					<!-- /.card-box -->

					<div class="card-box mt-25" data-sal="slide-up" data-sal-duration="900" data-sal-delay="600">
						<div class="icon rounded-circle m-auto d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_28.png') }}" alt=""></div>
						<h5>Be the Reason Someone Smiles</h5>
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
								<div class="main-count"><span class="counter">2168</span>+</div>
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
			Feedback Section Two
		=====================================================
		-->
		<div class="feedback-section-two position-relative z-1 pt-130 lg-pt-80 pb-110 lg-pb-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 m-auto">
						<div class="title-one text-center mb-65 lg-mb-50" data-sal="slide-up" data-sal-duration="900">
							<div class="upper-title">Testimonial</div>
							<h2>What Our Customer Are Saying</h2>
						</div>
						<!-- /.title-one -->
					</div>
				</div>
			</div>

			<div class="box-layout-one">
				<div class="feedback-slider-two">
					<div class="item">
						<div class="feedback-wrapper position-relative z-1" style="background: #edf7f3;">
							<img src="{{ asset('images/icon/icon_23.png') }}" alt="icon" class="icon">
							<div class="d-flex align-items-center">
								<img src="{{ asset('images/media/img_36.jpg') }}" alt="avatar" class="avatar rounded-circle">
								<div class="name">
									<h5>Loreak Alex</h5>
									<span class="fs-16">Charity Volunteer </span>
								</div>
							</div>
							<h4 class="font-amita">It is very good company</h4>
							<blockquote>Lorem ipsum dolor sit amet consectetur review sed do eiusmod tempor incididunt ut labore et on dolore magna aliqua. Ut enim ad minim veniam</blockquote>
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
										<a href="#"><img src="{{ asset('images/icon/icon_21.png') }}" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('images/icon/icon_22.png') }}" alt=""></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.feedback-wrapper -->
					</div>
					<div class="item">
						<div class="feedback-wrapper position-relative z-1" style="background: #fbf8e6;">
							<img src="{{ asset('images/icon/icon_23.png') }}" alt="icon" class="icon">
							<div class="d-flex align-items-center">
								<img src="{{ asset('images/media/img_37.jpg') }}" alt="avatar" class="avatar rounded-circle">
								<div class="name">
									<h5>Adam Saimon</h5>
									<span class="fs-16">Charity Volunteer </span>
								</div>
							</div>
							<h4 class="font-amita">Amazing Services</h4>
							<blockquote>Lorem ipsum dolor sit amet consectetur review sed do eiusmod tempor incididunt ut labore et on dolore magna aliqua. Ut enim ad minim veniam</blockquote>
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
										<a href="#"><img src="{{ asset('images/icon/icon_21.png') }}" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('images/icon/icon_22.png') }}" alt=""></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.feedback-wrapper -->
					</div>
					<div class="item">
						<div class="feedback-wrapper position-relative z-1" style="background: #edf7f3;">
							<img src="{{ asset('images/icon/icon_23.png') }}" alt="icon" class="icon">
							<div class="d-flex align-items-center">
								<img src="{{ asset('images/media/img_38.jpg') }}" alt="avatar" class="avatar rounded-circle">
								<div class="name">
									<h5>Tomas Wiliam </h5>
									<span class="fs-16">Charity Volunteer </span>
								</div>
							</div>
							<h4 class="font-amita">Best Charity Team</h4>
							<blockquote>Lorem ipsum dolor sit amet consectetur review sed do eiusmod tempor incididunt ut labore et on dolore magna aliqua. Ut enim ad minim veniam</blockquote>
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
										<a href="#"><img src="{{ asset('images/icon/icon_21.png') }}" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('images/icon/icon_22.png') }}" alt=""></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.feedback-wrapper -->
					</div>
					<div class="item">
						<div class="feedback-wrapper position-relative z-1" style="background: #fbf8e6;">
							<img src="{{ asset('images/icon/icon_23.png') }}" alt="icon" class="icon">
							<div class="d-flex align-items-center">
								<img src="{{ asset('images/media/img_37.jpg') }}" alt="avatar" class="avatar rounded-circle">
								<div class="name">
									<h5>Adam Saimon</h5>
									<span class="fs-16">Charity Volunteer </span>
								</div>
							</div>
							<h4 class="font-amita">Amazing Services</h4>
							<blockquote>Lorem ipsum dolor sit amet consectetur review sed do eiusmod tempor incididunt ut labore et on dolore magna aliqua. Ut enim ad minim veniam</blockquote>
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
										<a href="#"><img src="{{ asset('images/icon/icon_21.png') }}" alt=""></a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('images/icon/icon_22.png') }}" alt=""></a>
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
							<span>Volunteer</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>Fundraise</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>Campaign</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>Humanity</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>Change Lives</span>
						</div>
					</div>
					<div class="item">
						<div class="d-flex align-items-center justify-content-center">
							<img src="{{ asset('images/shape/shape_40.png') }}" alt="icon" class="me-3">
							<span>Campaign</span>
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
								<div class="upper-title">Faq’s</div>
								<h2>Questions & Answers</h2>
							</div>
							<!-- /.title-one -->

							<p class="pe-xxl-4 mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt magna aliqua</p>
							<p class="fw-500 mb-25">Don’t find the answer? We can help</p>
							<a href="{{ route('contact') }}" class="btn-two">Contact us</a>
						</div>
					</div>
					<div class="col-lg-7 ms-auto" data-sal="slide-left" data-sal-duration="900">
						<div class="accordion accordion-style-one md-mt-40" id="accordionOne">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                       1. Where does my money go?
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur faq adipiscing elit sed do eiusmod tempor incididunt magna aliqua. Duis aute irure dolor in reprehenderit  ullamco laboris</p>
                                    </div>
                                  </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Can I volunteer with your organization?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur faq adipiscing elit sed do eiusmod tempor incididunt magna aliqua. Duis aute irure dolor in reprehenderit  ullamco laboris</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        3. How can I stay updated with your work?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur faq adipiscing elit sed do eiusmod tempor incididunt magna aliqua. Duis aute irure dolor in reprehenderit  ullamco laboris</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                       4. Can I donate goods instead of money?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur faq adipiscing elit sed do eiusmod tempor incididunt magna aliqua. Duis aute irure dolor in reprehenderit  ullamco laboris</p>
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
									<h2 class="text-white">Make Change Happen. Invest In People.</h2>
								</div>
								<!-- /.title-one -->
								<p class="fw-500 mb-50 lg-mb-30">Subscribe our newsletter get the latest news other
									tips </p>
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
			
			<img src="{{ asset('images/shape/shape_44.png') }}" alt="shape" class="shapes shape_03">
			<img src="{{ asset('images/shape/shape_45.png') }}" alt="shape" class="shapes shape_04">
		</div>
		<!-- /.fancy-banner-one -->



		
@endsection
