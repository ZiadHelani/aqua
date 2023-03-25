@extends('layouts.web-app')
@section('style')
<style>
        .custom-btn{
            padding: 8px 20px;
            border-radius: 12px;
            color: #fff;
            font-size: 14px;
            background: #eb5f27;
            border: 2px solid #eb5f27;
            font-weight: 600;
        }
        .custom-btn:hover{
            color: #444;
            background: #fff;
            border: 2px solid #eb5f27;
        }
        
        a > .custom-btn:hover{
            color: #444;
            background: #fff;
            border: 2px solid #eb5f27;
        }
    </style>
@endsection


@section('content')
        <section class="page-header page-header-modern">
            <div class="container">
                <div class="row mt-5">
                </div>
            </div>
        </section>
        <div class="container mt-5 p-5">
        <form class="needs-validation" method="post" action="{{route('save_order')}}" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-lg-7 mb-4 mb-lg-0">

                        <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">{{trans('words.billing-details')}}</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label">{{trans('words.first-name')}} <span class="text-color-danger"></span></label>
                                <input type="text" class="form-control h-auto py-2" name="firstName" value="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label">{{trans('words.last-name')}} <span class="text-color-danger"></span></label>
                                <input type="text" class="form-control h-auto py-2" name="lastName" value="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">{{trans('words.company-name')}}</label>
                                <input type="text" class="form-control h-auto py-2" name="companyName" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">{{trans('words.country')}} / {{trans('words.region')}} <span class="text-color-danger"></span></label>
                                <div class="custom-select-1">
                                    <select class="form-select form-control h-auto py-2" id="list" name="country" required>
                                        @foreach($shippings as $ship)
                                            <option id="ship" value="{{$ship->id}}" data-cost="{{$ship->shipping_cost}}">{{$ship->country_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">{{trans('words.street-address')}} <span class="text-color-danger"></span></label>
                                <input type="text" class="form-control h-auto py-2" name="address1" value="" placeholder="{{trans('words.street-name')}} " required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="text" class="form-control h-auto py-2 mt-2" name="address2" value="" placeholder="{{trans('words.appartment')}}" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">{{trans('words.town')}} / {{trans('words.city')}}<span class="text-color-danger"></span></label>
                                <input type="text" class="form-control h-auto py-2" name="city" value="" required="">
                            </div>
                        </div>
                        <!--<div class="row">-->
                        <!--    <div class="form-group col">-->
                        <!--        <label class="form-label">State<span class="text-color-danger"></span></label>-->
                        <!--        <div class="custom-select-1">-->
                        <!--            <select class="form-select form-control h-auto py-2" name="state" required="">-->
                        <!--                <option value=""></option>-->
                        <!--            </select>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">ZIP <span class="text-color-danger"></span></label>
                                <input type="text" class="form-control h-auto py-2" name="zip" value="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">{{trans('words.phone')}} <span class="text-color-danger"></span></label>
                                <input type="number" class="form-control h-auto py-2" name="phone" value="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">{{trans('words.email-address')}} <span class="text-color-danger"></span></label>
                                <input type="email" class="form-control h-auto py-2" name="email" value="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">{{trans('words.order-notes')}}</label>
                                <textarea class="form-control h-auto py-2" name="orderNotes" rows="5"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 position-relative">
                        <div class="pin-wrapper" style="height: 908px;"><div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}" style="width: 451px;">
                            <div class="card-body">
                                <h4 class="font-weight-bold text-uppercase text-4 mb-3">{{trans('words.your-order')}}</h4>
                                <hr>
                                <table class="shop_table cart-totals mb-3">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="border-top-0">
                                                <strong class="text-color-dark"><u>{{trans('words.products')}} : </u></strong>
                                            </td>
                                        </tr>
                                        @for ($i = 0; $i < count($allData); $i++)
                                       <tr>
                                                <td>
                                                <strong class="d-block text-color-dark line-height-1 font-weight-semibold">
                                                    @if($lang == 'en')
                                                    {{$allData[$i]['name_product_en']}}
                                                    @elseif($lang == 'ar')
                                                    {{$allData[$i]['name_product_ar']}}
                                                    @endif
                                                    <span class="product-qty">x{{$allData[$i]['quantity']}}</span></strong>
                                                
                                                <input type="hidden" value="{{$allData[$i]['quantity']}}" name="quantity[{{$i}}]">
                                                @foreach($products as $product)
                                                @if($allData[$i]['product_id'] == $product->id)
                                                <label class="rounded" id="n6" style="background:{{asset('images/products/' . $product->image)}};  height:15px; width:15px;"></label>
                                                <input type="hidden" value="{{$product->id}}" name="product_id[{{$i}}]">
                                                @endif
                                                @endforeach
                                                </td>
                                            <td class="text-end align-top">
                                                <span class="amount font-weight-medium text-color-grey"> {{'AED' . ' ' . $allData[$i]['product_price'] * $allData[$i]['quantity']}}</span>
                                            </td>
                                        </tr>
                                        @endfor
                                        <tr class="shipping">
                                            <td class="border-top-1">
                                                <strong class="text-color-dark"><u>{{trans('words.shipping')}}: </u></strong>
                                            </td>
                                            <td class="border-top-0 text-end">
                                                <strong><span id="cost" class="amount font-weight-medium" >
                                                    <!--value from js -->
                                                    </span></strong>
                                            </td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <td class="border-top-0">
                                                <!--<strong class="text-color-dark">Sub Total</strong>-->
                                            </td>
                                            <td class="border-top-0 text-end">
                                                <!--<strong><span id="subtotalvalue" class="amount font-weight-medium">-->
                                                    
                                                    <!--</span></strong>-->
                                                
                                            </td>
                                        </tr>
                                        <!----------------------------------------------->
                                        <tr class="subtotal">
                                            <td>
                                                <strong class="text-color-dark text-3-5"><u>{{trans('words.subtotal')}} : </u></strong>
                                            </td>
                                            <td class="text-end">
                                                <strong class="text-color-dark"><span id="" class="amount text-color-dark text-5">
                                                    @php
                                                    $sub = 0;
                                                    for($i = 0; $i < count($allData); $i++){
                                                    $sub= $sub + $allData[$i]['subtotal'];
                                                    }
                                                    echo '  ' . 'AED' . ' ' . $sub;
                                                    @endphp
                                                </span></strong>
                                                <input type="text" name="subtotal" value="{{$sub}}" id="subtotal" style="display:none;">
                                            </td>
                                        </tr>
                                        <!----------------------------------------------------->
                                        <tr class="shipping">
                                            <td class="border-top-1">
                                                <!--<strong class="text-color-dark">Shipping</strong>-->
                                            </td>
                                            <td class="border-top-0 text-end">
                                                <strong><span id="cost" class="amount font-weight-medium" >
                                                    <!--value from js -->
                                                    </span></strong>
                                            </td>
                                        </tr>
                                        <!---------------------------------------------------------->
                                        
                                        <!---------------------------------------------->
                                        <tr class="total">
                                            <td>
                                                <strong class="text-color-dark text-3-5"><u>{{trans('words.total')}} : </u></strong>
                                            </td>
                                            <td class="text-end">
                                                <strong class="text-color-dark"><span id="totalview" class="amount text-color-dark text-5">
                                                    
                                                </span></strong>
                                                <input type="text" name="total" id="totalsvalue" style="display:none;">
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr class="payment-methods">
                                            <td colspan="2">
                                                <strong class="d-block text-color-dark mb-2">{{trans('words.payment-method')}}</strong>

                                                <div class="d-flex flex-column">
                                                    <label class="d-flex align-items-center text-color-grey mb-0" for="payment_method1">
                                                        <input id="payment_method1" type="radio" class="me-2" name="payment_method" value="cash-on-delivery" style="accent-color:#383f48;" checked="">
                                                        Stripe
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn w-full" style="background-color:#0088CC; color:white;">{{trans('words.place-order')}} <i class="fas fa-arrow-right ms-2"></i></button>
                            </div>
                        </div></div>
                    </div>
                </div>
            </form>
    </div>




@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var firstCost = {{$shippings[0]->shipping_cost}};
    document.getElementById("cost").innerText = 'AED  '+firstCost;
    document.getElementById("totalview").innerText ='AED  '+(parseInt(document.getElementById("subtotal").value)+firstCost);
    document.getElementById("totalsvalue").value=parseInt(document.getElementById("subtotal").value)+firstCost;
        
    $("#list").change(function() {
        const $this = $(this); // Cache $(this)
        const dataVal = $this.find(':selected').data('cost'); // Get data value
        const selectedVal = $this[0].value;
      
        document.getElementById("cost").innerText = 'AED  '+dataVal;
        document.getElementById("totalview").innerText ='AED  '+(parseInt(document.getElementById("subtotal").value)+dataVal);
        document.getElementById("totalsvalue").value=parseInt(document.getElementById("subtotal").value)+dataVal;
    });
</script>
@endsection