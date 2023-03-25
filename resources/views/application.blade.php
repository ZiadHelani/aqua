@extends('layouts.web-app')

@section('content')

        <section class="page-header page-header-modern page-header-background page-header-background-md mb-0" style="background-position: center; background-image: url(images/header-image-applications/{{$header_image->image}}); height:calc(100vh - 70px)">
            <div class="container">
                <div class="row mt-5">
                    {{-- <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">About Us</h1>
                        <span class="sub-title">The perfect choice for your next project</span>
                    </div> --}}
                </div>
            </div>
        </section>

        @foreach($applications as $app)
        <section class="section section-default border-0 mt-0 appear-animation @if($loop->index %2 == 1){{'bg-white'}}@endif" data-appear-animation="fadeIn" data-appear-animation-delay="750">
            <div class="container py-4">

                <div class="row align-items-center">
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                        <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': false, 'autoplayTimeout': 6000, 'loop': true, 'dots':false}" dir="ltr">
                            <div>
                                <img alt="" class="img-fluid" src="{{asset('images/applications/' . $app->image)}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"><strong class="font-weight-extra-bold">{{$app->title}}</strong></h2>
                        </div>
                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">{{$app->sub_title}}</p>
                        <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">{{$app->desc}}</p>
                    </div>
                </div>

            </div>
        </section>
        @endforeach

    </div>

@endsection
