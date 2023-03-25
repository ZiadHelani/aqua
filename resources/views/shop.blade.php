@extends('layouts.web-app')
@section('content')

    <section class="page-header page-header-modern page-header-background page-header-background-md " style="background-image: url(images/categories-header-image/{{$header_image->image}}); background-position: center; height:calc(100vh - 70px)">
        <div class="container">
            <div class="row mt-5">
                {{-- <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">About Us</h1>
                    <span class="sub-title">The perfect choice for your next project</span>
                </div> --}}
            </div>
        </div>
    </section>

    <div class="container mt-5 p-5">

        <div class="masonry-loader masonry-loader-showing">
            <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                @if(session()->has('success'))
                <div class="alert alert-primary" role="alert">
                  {{session()->get('success')}}
                </div>
                  @elseif(session()->has('error'))
                  <div class="alert alert-danger" role="alert">
                  {{session()->get('error')}}
                </div>
                  @endif
                @foreach($products as $product)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="product mb-0">
                        <div class="product-thumb-info border-0 mb-3">

                            <a href="{{route('product', $product->id)}}">
                                <div class="product-thumb-info-image">
                                    <img alt="" class="img-fluid" src="{{asset('images/products/' . $product->image)}}">

                                </div>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{$lang == 'en' ? $product->categories->category_name : $product->categories->category_name_ar}}</a>
                                <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">{{$lang == 'en' ? $product->name_product_en : $product->name_product_ar}}</a></h3>
                            </div>
                        </div>
                        <div title="Rated 5 out of 5">
                            <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                        </div>
                        <p class="price text-5 mb-3">
                            <span class="sale text-color-dark font-weight-semi-bold">{{$product->price . '  AED'}}</span>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-4" dir="ltr">
                <div class="col">
                    {{$products->links()}}
                    <!--<ul class="pagination float-end">-->
                    <!--    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>-->
                    <!--    <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
                    <!--    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                    <!--    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                    <!--    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>

    </div>

@endsection