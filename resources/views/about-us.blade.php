@extends('layouts.web-app')

@section('content')

        <section class="page-header page-header-modern page-header-background page-header-background-md mb-0" style="background-image: url(images/header-about-us/{{$header_image->image}}); background-position: center; height:calc(100vh - 104px);">
            <div class="container">
                <div class="row mt-5">
                    {{-- <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">About Us</h1>
                        <span class="sub-title">The perfect choice for your next project</span>
                    </div> --}}
                </div>
            </div>
        </section>

        <section class="section section-default border-0 my-5 mt-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
            <div class="container py-4">

                <div class="row align-items-center">
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                        <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': false, 'autoplayTimeout': 6000, 'loop': true, 'dots':false}" dir="ltr">
                            <div>
                                <img alt="" class="img-fluid" src="{{asset('images/header-image-about-us/' . $about->image)}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"><strong class="font-weight-extra-bold">{{trans('words.about-us')}}</strong></h2>
                        </div>
                        <p class="appear-animation text-4 " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                            @if($lang == 'en')
        						{{$about->text_en}}
        					@elseif($lang == 'ar')
        						{{$about->text_ar}}
        					@endif
                        </p>
                        <!--<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>-->
                    </div>
                </div>

            </div>
        </section>

        <div class="container">

            <div class="row mt-5 py-3">
                <div class="col-md-12">
                    <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle>
                        <section class="toggle active mt-0">
                            <a class="toggle-title text-5">{{trans('words.our-vision')}}</a>
                            <div class="toggle-content text-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            @if($lang == 'en')
                        						{{$our_vision->text_en}}
                        					@elseif($lang == 'ar')
                        						{{$our_vision->text_ar}}
                        					@endif
                                        </p>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <img width="70%" src="{{asset('images/our-vision/' . $our_vision->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="toggle active">
                            <a class="toggle-title text-5">{{trans('words.our-mission')}}</a>
                            <div class="toggle-content text-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            @if($lang == 'en')
                        						{{$our_mission->text_en}}
                        					@elseif($lang == 'ar')
                        						{{$our_mission->text_ar}}
                        					@endif
                                        </p>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <img width="70%" src="{{asset('images/our-mission/' . $our_mission->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
