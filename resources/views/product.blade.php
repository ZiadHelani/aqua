@extends('layouts.web-app')
@section('style')
<link rel="stylesheet" href="{{assert('css/theme-shop.css')}}">
@endsection
@section('content')
<style>
    
/*****************globals*************/

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>
    
    <div class="container pt-5">
        @if(session()->has('success'))
        <div class="alert alert-success text-center" style="delay:1s;">
        {{session()->get('success')}}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger text-center" style="delay:1s;">
        {{session()->get('error')}}
        </div>
        @endif
        <div class="row">
            <div class="col-md-5 mb-5 mb-md-0">
                <img src="{{asset('images/products/' . $product->image)}}" />
            </div>
                

            <div class="shop col-md-7">

                <div class="summary entry-summary position-relative">
                    
                    <form enctype="multipart/form-data" method="post" class="cart" action="{{route('add_to_cart')}}">
                    @csrf
                    <h1 class="mb-0 font-weight-bold text-7">
                        {{$lang == 'en' ? $product->name_product_en : $product->name_product_ar}}
                    </h1>
                    <h2>
                        <span class="category" data-toggle="tooltip">{{$product->categories->category_name}}</span>
						<input type="hidden" name="category_id" value="{{$product->category_id}}">
						<input type="hidden" name="product_category" value="{{$product->categories->category_name}}">
					</h2>
                    <input type="hidden" name="product_name_en" value="{{$product->name_product_en}}">
                    <input type="hidden" name="product_name_ar" value="{{$product->name_product_ar}}">
                    <input type="hidden" name="product_id" value="{{$product->id}}">

                    <div class="divider divider-small">
                        <hr class="bg-color-grey-scale-4">
                    </div>

                    <p class="price mb-3">
                        <span class="sale text-color-dark">{{ $product->price . 'AED'}}</span>
                        <input type="hidden" name="product_price" value="{{$product->price}}">
                        {{--<span class="amount">$22,00</span>--}}
                    </p>

                    <p class="text-3-5 mb-3">
                        {{$lang == 'en' ? $product->desc_product_en : $product->desc_product_ar}} 
                    </p>

                        <hr style="background: rgba(0, 0, 0, 0.06);    border: 0;    height: 1px;    margin: 22px 0;    opacity: 1;">
                        <div class="quantity quantity-lg" dir="ltr">
                            <input type="button" id="minus" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                            <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                            <input type="button" id="plus" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                        </div>
                        @if(1)
                            <button type="submit"  class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">{{__('words.Add To Cart')}}</button>
                        @else
                            <button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary" disabled>{{__('words.Add To Cart')}}</button>
                        @endif
                        <!--send hidden data here -->
                        <input type="hidden" name="title" value="
                        
                        ">
                        <input type="hidden" name="price" value="
                        {{'price'}}
                        ">

                    </form>
                </div>

            </div>
        </div>

    </div>
    

@endsection

@section('script')
<script>
    $('#plus').on('click',function(){
        var $qty=$('.qty');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });

    $('#minus').on('click',function(){
        var $qty=$('.qty');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $qty.val(currentVal - 1);
        }
    });
</script>
@endsection