@extends('layouts.app', ['header' => 'inner', 'footer' => 'one'])
@php $s = $s ?? \App\Models\Setting::allCached(); @endphp

@section('title', 'Contact - ' . $s['site_name'])

@section('content')
		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		<div class="inner-banner-one header-space-fix-three text-center position-relative z-1">
            <div class="container">
                <h2>Contact</h2>
                <div class="breadcrumb-content">
                    <ul class="style-none d-inline-flex justify-content-center position-relative z-1">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>-</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('images/shape/shape_43.png') }}" alt="shape" class="shapes shape_01">
		</div>
		<!-- /.inner-banner-one -->


        <div class="contact-map-banner w-100">
            <div class="gmap_canvas h-100 w-100">
                <iframe class="gmap_iframe h-100 w-100" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q={{ urlencode($s['map_query']) }}&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>





		<!--
		=====================================================
			Contact Section
		=====================================================
		-->
		<div class="contact-section pt-130 lg-pt-80 pb-140 lg-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="address-block text-center mt-25">
                            <div class="icon m-auto rounded-circle d-flex align-items-end justify-content-center">
                                <div class="icon-bg d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_36.png') }}" alt=""></div>
                            </div>
                            <h6 class="font-amita">Our Address</h6>
                            <p>{!! nl2br(e($s['address'])) !!}</p>
                        </div>
                        <!-- /.address-block -->
                    </div>
                    <div class="col-lg-4">
                        <div class="address-block text-center mt-25">
                            <div class="icon m-auto rounded-circle d-flex align-items-end justify-content-center">
                                <div class="icon-bg d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_37.png') }}" alt=""></div>
                            </div>
                            <h6 class="font-amita">Our Phone</h6>
                            <p>{{ $s['phone_1'] }}@if(!empty($s['phone_2'])) <br> {{ $s['phone_2'] }}@endif</p>
                        </div>
                        <!-- /.address-block -->
                    </div>
                    <div class="col-lg-4">
                        <div class="address-block text-center mt-25">
                            <div class="icon m-auto rounded-circle d-flex align-items-end justify-content-center">
                                <div class="icon-bg d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/icon_38.png') }}" alt=""></div>
                            </div>
                            <h6 class="font-amita">Write email</h6>
                            <p><span>{{ $s['email_1'] }}</span>@if(!empty($s['email_2'])) <span>{{ $s['email_2'] }}</span>@endif</p>
                        </div>
                        <!-- /.address-block -->
                    </div>
                </div>

                <div class="contact-form-section position-relative z-1 mt-100">
                    <div class="row">
                        <div class="col-lg-7 m-auto">
                            <h2>Don’t Hesitate to Send Your Message To Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="form-style-one md-mb-40">
                                <h4>Feel free to write us anytime</h4>
                                <form action="{{ route('contact.store') }}" method="POST" id="contact-form" data-toggle="validator" novalidate>
								    @csrf
								    <div style="position:absolute;left:-9999px;" aria-hidden="true"><input type="text" name="website" tabindex="-1" autocomplete="off"></div>
                                    <div class="messages">
										@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
										@if($errors->any())<div class="alert alert-danger">{{ $errors->first() }}</div>@endif
									</div>
                                    <div class="row controls">
                                        <div class="col-12">
                                            <div class="input-wrapper form-group mb-20">
                                                <input type="text" placeholder="John Smite" name="name" value="{{ old('name') }}" required="required"
                                                    data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="input-wrapper form-group mb-20">
                                                <input type="email" placeholder="Email@gmail.com" name="email" value="{{ old('email') }}" required="required"
                                                    data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-wrapper form-group mb-20">
                                                <input type="tel" placeholder="+88 21 32 12 14" name="phone" value="{{ old('phone') }}" required="required"
                                                    data-error="Valid phone number is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                    
                                        <div class="col-12">
                                            <div class="input-wrapper form-group mb-20">
                                                <textarea placeholder="Write your message" name="message" required="required"
                                                    data-error="Please,leave us a message.">{{ old('message') }}</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-12"><button class="btn-one w-100">Send Message</button></div>
                                    </div>
                                </form>
                            </div> <!-- /.form-style-one -->
                        </div>

						<div class="col-lg-5">
							<div class="address-block version-two text-center mt-15">
								<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center">
									<img src="{{ asset('images/icon/icon_36.png') }}" alt="">
								</div>
								<h6>Near by: West side of the road </h6>
								<p>{{ $s['address'] }}</p>
							</div>
							<!-- /.address-block -->

							<div class="address-block version-two text-center mt-15">
								<div class="icon m-auto rounded-circle d-flex align-items-center justify-content-center">
									<img src="{{ asset('images/icon/icon_37.png') }}" alt="">
								</div>
								<h6>Quick Get in touch</h6>
								<p class="fs-20">{{ $s['phone_1'] }}</p>
							</div>
							<!-- /.address-block -->
						</div>
                    </div>
                </div>
            </div>
		</div>
		<!-- /.contact-section -->



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
