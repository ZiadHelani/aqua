<!DOCTYPE html>
<html lang="{{session('locale')}}">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Aqua Care</title>	

		<meta name="keywords" content="Aqua Care" />
		<meta name="description" content="The brand Aqua Care® was created in 2015 by the team of progressive investors, engineers and other professionals having 10+ years of experience in the sector of eco-friendly technologies and namely disinfectants and personal hygiene solutions.">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('images/aqua-logo.png')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('images/aqua-logo.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

        <style>
            @font-face {
              font-family: DINNextLTPro;
              src: url(font/DINNextLTPro-Medium.ttf);
            }
            @font-face {
                font-family: DINNextLTPro;
                src: url(font/DINNextLTPro-Bold.ttf);
                font-weight: bold;
            }
            
            * {
              font-family: DINNextLTPro;
            }
        </style>

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">
		
		<!--Tailwindcss-->
		<link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">

		<!-- Head Libs -->
		<script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>

        @yield('style')

	</head>
	<body data-plugin-page-transition {{session('locale')=='ar'?"dir=rtl":""}}>

		<div class="body">
			
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none overflow-visible">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{url('/')}}"><img alt="Porto" width="100" height="65" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0" src="{{asset('img/aqua-logo.png')}}"></a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-light header-nav-bottom-line-effect-1 header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-text-size-3 header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle @if($type == 'home'){{'active'}}@endif" href="{{route('website.index')}}">
															{{trans('words.home')}}
														</a>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle @if($type == 'about-us'){{'active'}}@endif" href="{{route('about-us')}}">
															{{trans('words.about-us')}}
														</a>
													</li>
													{{--<li class="dropdown">
														<a class="dropdown-item dropdown-toggle @if($type == 'application'){{'active'}}@endif" href="{{route('website.app')}}">
															{{trans('words.application')}}
														</a>
													</li>--}}
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle @if($type == 'shop'){{'active'}}@endif" href="{{route('shop')}}">
															{{trans('words.shop')}}
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle @if($type == 'contact-us'){{'active'}}@endif" href="{{route('contact-us')}}">
															{{trans('words.contact-us')}}
														</a>
													</li>
													<li class="dropdown">
														<a href="#" class="dropdown-item dropdown-toggle">{{ $lang == 'en' ? 'ENG' : 'AR'}}<i class="fas fa-chevron-down"></i></a>
														<ul class="dropdown-menu">
															<li><a href="{{url('/').'/lang/en'}}" class="dropdown-item"><img src="{{asset('img/blank.gif')}}" class="flag flag-us" alt="English"> {{trans('words.english')}}</a></li>
															<li><a href="{{url('/').'/lang/ar'}}" class="dropdown-item"><img src="{{asset('img/blank.gif')}}" class="flag flag-sa" alt="Arabic"> {{trans('words.arabic')}}</a></li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<button class="btn" type="submit">
															<i class="fas fa-search header-nav-top-icon text-color-dark"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
										<div class="header-nav-feature header-nav-features-cart d-inline-flex ms-2">
											<a href="{{route('cart')}}" class="header-nav-features">
												<img src="{{asset('img/icons/icon-cart-light.svg')}}" width="14" alt="" class="header-nav-top-icon-img">
												<span class="cart-info">
													<span class="cart-qty">
													    @if(Session::has('data'))
                                                        {{count(Session::get('_flash'))-2}}
                                                        @else
                                                        0
                                                        @endif
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				
				@yield('content')

			</div>

			<footer id="footer" class="footer-texts-more-lighten mt-0">
				<div class="container">
					<div class="row py-4 mt-5 text-center">
						<div class="col-md-4 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">{{trans('words.contact-info')}}</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">{{trans('words.address')}}</span> 
									P.O. Box 191950, Dubai, United Arab Emirates
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">{{trans('words.website')}}</span>
									<a href="https://www.aquacares.net">www.aquacares.net</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">{{trans('words.email')}}</span>
									<a href="mailto:info@aquacares.net">info@aquacares.net</a>
								</li>
							</ul>
							<ul class="social-icons social-icons-clean-with-border social-icons-medium">
								<li class="social-icons-instagram">
									<a href="{{Helper::showSocial()->instagram_link}}" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="{{Helper::showSocial()->facebook_link}}" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-4 mb-5 mb-lg-0 d-flex justify-content-center align-items-center">
							<a href="{{route('website.index')}}">
								<img width='170' height="108" src="https://aquacares.net/wp-content/uploads/2021/08/logo_aqua_1nov2020.png" alt="">
							</a>
						</div>
						<div class="col-md-4 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">{{trans('words.useful-links')}}</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="{{route('website.index')}}">{{trans('words.home')}}</a></li>
								<li class="mb-0"><a href="{{route('about-us')}}">{{trans('words.about-us')}}</a></li>
								{{--<li class="mb-0"><a href="{{route('website.app')}}">{{trans('words.application')}}</a></li>--}}
								<li class="mb-0"><a href="{{route('shop')}}">{{trans('words.shop')}}</a></li>
								<li class="mb-0"><a href="{{route('contact-us')}}">{{trans('words.contact-us')}}</a></li>
							</ul>
						</div>
					</div>
				</div>
				{{-- <div class="container">
					<div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
						<div class="row">
							<div class="col-12 text-center">
								<p class="mb-0">Porto Template © 2022. All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div> --}}
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('vendor/lazysizes/lazysizes.min.js')}}"></script>
		<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('vendor/vivus/vivus.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('js/theme.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('js/theme.init.js')}}"></script>

        @yield('script')

	</body>
</html>
