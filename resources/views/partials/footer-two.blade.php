<div class="main-footer version-two">
			<div class="container">
				<div class="position-relative top-footer">
					<div class="row">
						<div class="col-lg-3">
							<div class="footer-intro mb-30 md-mb-50">
								<a href="{{ route('home') }}"><img src="{{ asset($s['logo_dark']) }}" alt=""></a>
								<p class="mt-20 mb-30 fs-16">{{ $s['footer_text'] }}</p>
								<ul class="style-none social-icon d-flex align-items-center">
									<li>Social </li>
									<li><a href="{{ $s['facebook'] ?: '#' }}" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="{{ $s['twitter'] ?: '#' }}" target="_blank" rel="noopener"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="{{ $s['pinterest'] ?: '#' }}" target="_blank" rel="noopener"><i class="fa-brands fa-pinterest-p"></i></a></li>
									<li><a href="{{ $s['instagram'] ?: '#' }}" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
								<a href="#" class="btn-three">Join Now</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="footer-nav ps-xxl-4 mb-30">
								<h6 class="footer-title">Explore Link</h6>
								<ul class="footer-nav-link style-none">
									<li><a href="{{ route('donations') }}">Charity</a></li>
									<li><a href="{{ route('donations') }}">Donation</a></li>
									<li><a href="#">Fundrising</a></li>
									<li><a href="#">Our Campaign</a></li>
									<li><a href="{{ route('contact') }}">Volunteer</a></li>
									<li><a href="{{ route('about') }}">About us</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-5">
							<div class="ps-xxl-4 mb-30">
								<h6 class="footer-title">Support</h6>
								<ul class="contact-info style-none">
									<li>
										<div
											class="icon d-flex align-items-center justify-content-center rounded-circle">
											<img src="{{ asset('images/icon/icon_13.png') }}" alt=""></div>
										<p class="m0 d-flex flex-column">
											@if(!empty($s['phone_1']))<a href="tel:{{ preg_replace('/[^+\d]/', '', $s['phone_1']) }}">{{ $s['phone_1'] }}</a>@endif
											@if(!empty($s['phone_2']))<a href="tel:{{ preg_replace('/[^+\d]/', '', $s['phone_2']) }}">{{ $s['phone_2'] }}</a>@endif
										</p>
									</li>
									<li>
										<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ asset('images/icon/icon_14.png') }}" alt=""></div>
										{{ $s['address'] }}
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="footer-news mb-30 ps-xxl-4">
								<h6 class="footer-title">Latest Post</h6>
								<ul class="style-none">
									<li>
										<article class="d-flex align-items-center">
											<figure class="post-img" style="background-image: url({{ asset('images/blog/blog_img_05.jpg') }});"></figure>
											<div class="post-data">
												<div class="date">12 Nov 2025</div>
												<h5 class="blog-title m0"><a href="#" class="line-bg">18 Best Charity Marketing Campaigns</a></h5>
											</div>
										</article>
									</li>
									<li>
										<article class="d-flex align-items-center">
											<figure class="post-img" style="background-image: url({{ asset('images/blog/blog_img_06.jpg') }});"></figure>
											<div class="post-data">
												<div class="date">12 Nov 2025</div>
												<h5 class="blog-title m0"><a href="#" class="line-bg">Charity Of The Month Golden Futures</a></h5>
											</div>
										</article>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<img src="{{ asset('images/shape/shape_32.png') }}" alt="shape" class="shapes shape_03">
					<img src="{{ asset('images/shape/shape_33.png') }}" alt="shape" class="shapes shape_04">
				</div>
			</div>
			<div class="container">
				<div class="bottom-footer">
					<div class="d-md-flex align-items-center justify-content-between">
						<div class="d-flex justify-content-center align-items-center sm-mb-10 order-md-last">
							<ul class="style-none d-flex justify-content-center">
								<li><a href="#">Privacy & Terms</a></li>
								<li><a href="#">Cookies</a></li>
								<li><a href="{{ route('contact') }}">Contact Us</a></li>
							</ul>
						</div>
						<p class="copyright-text text-center m0">{{ $s['copyright'] }}</p>
					</div>
				</div>
			</div>
			<img src="{{ asset('images/shape/shape_34.png') }}" alt="" class="shapes shape_01">
			<img src="{{ asset('images/shape/shape_19.png') }}" alt="" class="shapes shape_02">
		</div> <!-- /.main-footer -->
