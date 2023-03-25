@extends('layouts.web-app')

@section('content')
	<section>							
		<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}" data-dynamic-height="['calc(100vh - 104px)','calc(100vh - 104px)','calc(100vh - 61px)','calc(100vh - 61px)','calc(100vh - 61px)']" style="height: calc(100vh - 104px); background-position: center;"  dir='ltr'>
			<div class="owl-stage-outer">
				<div class="owl-stage">

                    @foreach($home_headers as $home_header)
					<!-- Carousel Slide 1 -->
					<div class="owl-item position-relative overflow-hidden">
						<div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(images/home-header/{{$home_header->image}}); background-size: cover; background-position: center;"></div>
						<div class="container position-relative z-index-3 h-100">
							{{-- <div class="row align-items-center justify-content-end h-100">
								<div class="col-lg-8 col-xl-7 text-center text-md-end">
									<h2 class="font-weight-bold text-color-default line-height-4 text-4 text-md-6 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" data-plugin-options="{'minWindowWidth': 0}">PERSONALIZED FINANCIAL PLANNING AND MORE</h2>
									<h1 class="text-color-dark font-weight-bold text-9 text-md-11 line-height-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100" data-plugin-options="{'minWindowWidth': 0}">Accountant and Financial Planner in New york</h1>
									<a href="#" class="btn btn-primary font-weight-bold positive-ls-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400" data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
								</div>
							</div> --}}
						</div>
					</div>
					@endforeach

					{{--<!-- Carousel Slide 2 -->
					<div class="owl-item position-relative overflow-hidden">
						<div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(images/home-header/{{$home_header->image}}); background-size: cover; background-position: center;"></div>
						<div class="container position-relative z-index-3 h-100">
							<div class="row align-items-center h-100">
								<div class="col-lg-8 col-xl-7 text-center text-md-start">
									<h2 class="font-weight-bold text-color-default line-height-4 text-4 text-md-6 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" data-plugin-options="{'minWindowWidth': 0}">INDEPENDENT FINANCIAL ADVISOR SINCE 1985</h2>
									<h1 class="text-color-dark font-weight-bold text-9 text-md-11 line-height-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100" data-plugin-options="{'minWindowWidth': 0}">Wealth Management and Best Financial Planning</h1>
									<a href="#" class="btn btn-primary font-weight-bold positive-ls-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400" data-plugin-options="{'minWindowWidth': 0}">GET STARTED</a>
								</div>
							</div> 
						</div>
					</div>--}}

				</div>
			</div>
			<div class="owl-nav">
				<button type="button" role="presentation" class="owl-prev"></button>
				<button type="button" role="presentation" class="owl-next"></button>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row pt-5">
			<div class="col">
				<div class="row text-center pb-5">
					<div class="col-md-9 mx-md-auto">
						<div class="overflow-hidden mb-3">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
								<span>{{trans('words.sentence-1')}}</span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">{{trans('words.change-1')}}</b>
									<b>{{trans('words.change-2')}}</b>
									<b>{{trans('words.change-3')}}</b>
								</span>
								<span>{{trans('words.sentence-2')}}</span>
							</h1>
						</div>
						<!--div class="overflow-hidden mb-3">
							<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div-->
					</div>
				</div>
				<div class="row mt-3 mb-5">
					<div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
						<h3 class="font-weight-bold text-5 mb-2">{{trans('words.our-mission')}}</h3>
						<p class="lead">
						    @if($lang == 'en')
						        {{$our_mission->text_en}}
						    @elseif($lang == 'ar')
						        {{$our_mission->text_ar}}
						    @endif
						</p>
					</div>
					<div class="col-md-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
						<h3 class="font-weight-bold text-5 mb-2">{{trans('words.our-vision')}}</h3>
						<p class="lead">
						    @if($lang == 'en')
						        {{$our_vision->text_en}}
						    @elseif($lang == 'ar')
						        {{$our_vision->text_ar}}
						    @endif
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
		<div class="container">
			<div class="row counters counters-sm pb-4 pt-3">
				<div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
					<div class="counter">
						<i class="icons icon-user text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="95000" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">{{trans('words.happy-clients')}}</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
					<div class="counter">
						<i class="icons icon-badge text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="9">0</strong>
						<label class="text-4 mt-1 text-color-light">{{trans('words.years-in-business')}}</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
					<div class="counter">
						<i class="icons icon-graph text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="25">0</strong>
						<label class="text-4 mt-1 text-color-light">{{trans('words.sku')}}</label>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
					<h2 class="text-color-dark font-weight-normal text-6 mb-2"><strong class="font-weight-extra-bold">{{trans('words.about-us')}}</strong></h2>
					<p class="lead">
					    @if($lang == 'en')
						 {{$about_us->text_en}}
						@elseif($lang == 'ar')
						 {{$about_us->text_ar}}
						@endif
					</p>
				</div>
				
				
				<div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5 text-center" style="top: 1.7rem;">
					<img src="{{asset('images/about-us-images/' . $about_us_images[2]->image)}}" width="164" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
					<img src="{{asset('images/about-us-images/' . $about_us_images[1]->image)}}" width="212" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
					<img src="{{asset('images/about-us-images/' . $about_us_images[0]->image)}}" width="318" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
				</div>
			</div>
		</div>
	</section>

	<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
		<div class="row pt-5 pb-4 my-5">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-start">
				<div class="owl-carousel owl-theme nav-style-1  stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}"  dir='ltr'>
					@foreach($product_images as $image)
					<div>
						<img class="img-fluid rounded-0 mb-4" src="{{asset('images/product-images/' . $image->image)}}" alt="" />
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0">
				<h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1 @if($lang == 'ar'){{'text-md-end'}}@endif"><strong class="font-weight-extra-bold">{{trans('words.meet-our-product')}}</strong></h2>
				<p class="lead  @if($lang == 'ar'){{'text-md-end'}}@endif">
				    @if($lang == 'en')
						{{$our_products->text_en}}
					@elseif($lang == 'ar')
						{{$our_products->text_ar}}
					@endif
			    </p>
				<p class="mb-4  @if($lang == 'ar'){{'text-md-end'}}@endif">
				    @if($lang == 'en')
						{{$near_by_store->title_en}}
					@elseif($lang == 'ar')
						{{$near_by_store->title_ar}}
					@endif
				</p>
				<div class="row text-center">
					<div class='col-sm-6 d-flex justify-content-center'>
						<a href="{{$near_by_store->link_amazon}}">
							<img decoding="async" width="150" height="75" src="https://aquacares.net/wp-content/uploads/2021/09/0.1-2.png" class="elementor-animation-grow attachment-large size-large wp-image-880" alt="" loading="lazy" srcset="https://aquacares.net/wp-content/uploads/2021/09/0.1-2.png 1181w, https://aquacares.net/wp-content/uploads/2021/09/0.1-2.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
						</a>
					</div>
					<div class='col-sm-6 d-flex justify-content-center'>
						<a href="{{$near_by_store->link_noon}}">
							<img decoding="async" width="150" height="75" src="https://aquacares.net/wp-content/uploads/2021/09/0.2-1-1.png" class="elementor-animation-grow attachment-large size-large wp-image-881" alt="" loading="lazy" srcset="https://aquacares.net/wp-content/uploads/2021/09/0.2-1-1.png 1181w, https://aquacares.net/wp-content/uploads/2021/09/0.2-1-1.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
		<div class="container pb-2">
			<div class="row">
				<div class="col-lg-6 text-center text-md-start mb-5 mb-lg-0">
					<h2 class="text-color-dark font-weight-normal text-6 mb-2 @if($lang == 'ar'){{'text-md-end'}}@endif"><strong class="font-weight-extra-bold">{{trans('words.about-our-client')}}</strong></h2>
					<p class="lead @if($lang == 'ar'){{'text-md-end'}}@endif">
					    @if($lang == 'en')
						    {{$about_our_clients->title_en}}
    					@elseif($lang == 'ar')
    						{{$about_our_clients->title_ar}}
    					@endif
					</p>
					<div class="row justify-content-center my-5">
						<div class="col-12 text-center col-md-12">
							<img src="{{asset('images/about-our-clients/' . $about_our_clients->image)}}" class="img-fluid hover-effect-3" alt="" />
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}"  dir='ltr'>
					    @foreach($our_clients as $client)
						<div>
							<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
								<div class="testimonial-author">
									<img src="{{asset('images/our-client/' . $client->image)}}" class="img-fluid rounded-circle mb-0" style="min-width:125px !important; min-height:100px !important;" width="100px" height="100px" alt="">
								</div>
								<blockquote>
									<p class="text-color-dark text-4 line-height-5 mb-0">{{$client->client_opinion}}</p>
								</blockquote>
								<div class="testimonial-author">
									<p><strong class="font-weight-extra-bold text-2">{{$client->client_name}}</strong><span>{{$client->client_job}}</span></p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id='application' class="section section-primary border-0 m-0 appear-animation p-0" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-md-5 mb-lg-0 mb-sm-0 d-flex justify-content-center">
					<img src="{{asset('images/app-details/' . $app_details->image)}}" width="80%" alt="">
				</div>
				<div class="col-lg-6 mb-5 mt-md-5 mb-lg-0 text-center">
					<h2 class="text-color-white font-weight-normal text-8 mt-md-4 mt-sm-0 mb-0 pt-md-5 pt-sm-0"><strong class="font-weight-extra-bold d-inline">
					@if($lang == 'en')
						{{$app_details->text_en}}
					@elseif($lang == 'ar')
						{{$app_details->text_ar}}
					@endif
					    <!--Download Our App-->
					    
					 </strong></h2>
					<div class="row">
						<div class='col-sm-6 d-flex justify-content-center'>
							<a href="{{$app_details->link_google}}">
								<img decoding="async" width="300" height="150" src="https://aquacares.net/wp-content/uploads/2021/09/google-play.png" class="elementor-animation-grow attachment-large size-large wp-image-881" alt="" loading="lazy" srcset="https://aquacares.net/wp-content/uploads/2021/09/google-play.png 1181w, https://aquacares.net/wp-content/uploads/2021/09/google-play-600x307.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
							</a>
						</div>
						<div class='col-sm-6 d-flex justify-content-center'>
							<a href="{{$app_details->link_apple}}">
								<img decoding="async" width="300" height="150" src="https://aquacares.net/wp-content/uploads/2021/09/app-store.png" class="elementor-animation-grow attachment-large size-large wp-image-880" alt="" loading="lazy" srcset="https://aquacares.net/wp-content/uploads/2021/09/app-store.png 1181w, https://aquacares.net/wp-content/uploads/2021/09/app-store-600x307.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
