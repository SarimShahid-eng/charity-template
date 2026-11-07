<header class="theme-main-menu menu-style-one menu-overlay sticky-menu">
			<div class="inner-content">
				<div class="bottom-header gap-one position-relative">
					<div class="d-flex align-items-center">
						<div class="logo order-lg-0">
							<a href="{{ route('home') }}" class="d-flex align-items-center">
								<img src="{{ asset('images/logo/logo_01.png') }}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-xxl-block me-3">
									<div class="cta-text font-amita text-white">Join us now </div>
								</li>
								<li class="me-3 d-none d-md-block">
                                    <a href="{{ route('contact') }}" class="cta-btn-one">Become a Volunteer</a>
                                </li>
								<li class="d-none d-sm-block">
                                    <form action="#" class="search-form-one position-relative z-1">
										<input type="text" placeholder="Search . . .">
										<button type="submit" class="tran3s rounded-circle"><i class="fa-regular fa-search"></i></button>
									</form>
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
									<li class="d-block d-lg-none"><div class="logo"><a href="{{ route('home') }}" class="d-block"><img src="{{ asset('images/logo/logo_02.png') }}" alt=""></a></div></li>
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
									<li class="d-md-none ps-3 pe-3 mt-20">
										<a href="{{ route('contact') }}" class="cta-btn-one w-100">Become a Volunteer</a>
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