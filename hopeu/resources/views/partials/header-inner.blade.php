<header class="theme-main-menu menu-style-three menu-overlay sticky-menu">
			<div class="top-header gap-two position-relative white-bg">
				<div class="d-flex justify-content-between align-items-center">
					<div class="column-wrapper d-flex align-items-center">
						<ul class="style-none top-header-nav-one d-flex flex-wrap align-items-center">
							<li class="d-flex align-items-center me-4">
								<i class="fa-regular fa-location-dot"></i>
								<span class="ms-2">{{ $s['address'] }}</span>
							</li>
							<li class="d-flex align-items-center me-4">
								<i class="fa-regular fa-envelope"></i>
								<a href="mailto:{{ $s['email_1'] }}" class="email ms-2">{{ $s['email_1'] }}</a>
							</li>
                            <li class="d-flex align-items-center me-4">
								<i class="fa-regular fa-mobile-button"></i>
								<a href="tel:{{ preg_replace('/[^+\d]/', '', $s['phone_1']) }}" class="email ms-2">{{ $s['phone_1'] }}</a>
							</li>
						</ul>
					</div>
					<!-- /.column-wrapper -->
					<div class="column-wrapper d-none d-lg-flex align-items-center justify-content-center">
						<div class="d-flex align-items-center">
                            <img src="{{ asset('images/icon/icon_24.png') }}" alt="icon" class="icon me-2">
                            <span class="m0 text-white fw-500">Make change happen. Invest in people</span>
                            <a href="{{ route('contact') }}" class="tran3s impact-cta ms-2">MAKE AN IMPACT</a>
                        </div>
					</div>
					<!-- /.column-wrapper -->
				</div>
			</div>
			<div class="inner-content">
				<div class="bottom-header gap-two position-relative">
					<div class="d-flex align-items-center">
						<div class="logo order-lg-0">
							<a href="{{ route('home') }}" class="d-flex align-items-center">
								<img src="{{ asset('images/logo/logo_03.png') }}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-xxl-block me-3">
									<div class="cta-text font-amita">Search Keyword</div>
								</li>
								<li class="me-3 d-none d-sm-block">
									<form action="#" class="search-form-one position-relative z-1">
										<input type="text" placeholder="Search . . .">
										<button type="submit" class="tran3s rounded-circle"><i class="fa-regular fa-search"></i></button>
									</form>
								</li>
                                <li class="d-none d-sm-block">
                                    <a href="{{ route('donations') }}" class="btn-one inverse">Donation Now</a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="{{ route('home') }}" class="d-block"><img src="{{ asset('images/logo/logo_03.png') }}" alt=""></a></div></li>
									<li class="nav-item">
										<a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ request()->routeIs('donations') ? 'active' : '' }}" href="{{ route('donations') }}">Donation</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
									</li>
									<li class="d-lg-none ps-3 pe-3 mt-20">
										<a href="{{ route('donations') }}" class="btn-one inverse w-100">Donation Now</a>
									</li>
									<li class="d-sm-none ps-3 pe-3 mt-20">
										<form action="#" class="search-form-one position-relative z-1">
											<input type="text" placeholder="Search . . .">
											<button type="submit" class="tran3s rounded-circle"><i class="fa-regular fa-search"></i></button>
										</form>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.bottom-header-->
			</div> <!-- /.inner-content -->
		</header>
		<!-- /.theme-main-menu -->