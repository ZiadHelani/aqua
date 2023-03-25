@extends('layouts.web-app')
@section('content')

<style>
  input[type='number']::-webkit-inner-spin-button,
  input[type='number']::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  .custom-number-input input:focus {
    outline: none !important;
  }

  .custom-number-input button:focus {
    outline: none !important;
  }
</style>
        <section class="page-header page-header-modern">
            <div class="container">
                <div class="row mt-5">
                </div>
            </div>
        </section>
                <div class="container  mt-5 p-5" id="shop">
            
            <div class="row pb-4 mb-5">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <form method="post" action="{{route('update_cart')}}">
                        @csrf
                        @if(session()->has('success'))
                        <div class="alert alert-primary text-center" style="delay:1s;">
                        {{session()->get('success')}}
                        </div>
                        @elseif(session()->has('error'))
                        <div class="alert alert-danger text-center" style="delay:1s;">
                        {{session()->get('error')}}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover table-light" style="text-align:center; align-items:center;">
  <thead class="table-dark">
    <tr>
      <th scope="col"><a style="background-color:#0088CC; color:white;" class="btn btn-custom btn-sm" href="{{route('empty_cart')}}">{{trans('words.empty-cart')}}</a></th>
      <th scope="col">{{trans('words.product')}}</th>
      <th scope="col">{{trans('words.price')}}</th>
      <th scope="col">{{trans('words.category')}}</th>
      <th scope="col">{{trans('words.quantity')}}</th>
    </tr>
  </thead>
  <tbody>
    @for($i=0;$i<count($allData);$i++)
    <tr>
      @foreach($products as $product)
      @if($product->id == $allData[$i]['product_id'])
      <td><img width="90" alt="" class="img-fluid" src="{{asset('images/products/' . $product->image)}}"></td>
      @endif
      @endforeach
      <td>
          @if($lang == 'en')
          {{$allData[$i]['name_product_en']}}
          @elseif($lang == 'ar')
          {{$allData[$i]['name_product_ar']}}
          @endif
      </td>
      @foreach($products as $product)
      @if($product->id == $allData[$i]['product_id'])
      <td>{{'AED' . ' ' . $allData[$i]['product_price']}}</td>
      @endif
      @endforeach
      <!--category -->
      @foreach($products as $product)
      @if($product->id == $allData[$i]['product_id'])
      <td>{{$allData[$i]['product_category']}}</td>
      @endif
      @endforeach
        <td>
                <div class="custom-number-input h-10 w-32">
                  <div class="flex flex-row h-10 w-32 relative bg-transparent mt-1">
                    <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                      <span class="m-auto text-2xl font-thin">−</span>
                    </button>
                    <input type="number" class="outline-none focus:outline-none text-center w-32 bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" min="1" step="1" value="{{$allData[$i]['quantity']}}" name="quantity[{{$i}}]"></input>
                  <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                    <span class="m-auto text-2xl font-thin">+</span>
                  </button>
                </div>
			</div>
	    </td>
    </tr>
    @endfor
    <tr>
                                        <td colspan="5">
                                            <div class="row justify-content-end mx-0">
                                                <div class="col-md-auto px-0">
                                                        <input class="btn" style="background-color:#0088CC;color:white;" type="submit" value="{{trans('words.update-cart')}}">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
  </tbody>
</table>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 position-relative">
                    <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                        <div class="card-body">
                            <h4 class="font-weight-bold text-uppercase text-4 mb-3">{{trans('words.total')}}</h4>
                            <table class="shop_table cart-totals mb-4">
                                <tbody>
                                    <tr class="total">
                                        <td>
                                            <strong class="text-color-dark text-3-5"></strong>
                                        </td>
                                        <td class="text-end">
                                            <strong class="text-color-dark"><span class="amount text-color-dark text-5">
                                                @php
                                                    $sub = 0;
                                                    for($i = 0; $i < count($allData); $i++){
                                                    $sub= $sub + $allData[$i]['subtotal'];
                                                    }
                                                    echo 'AED' . ' ' . $sub;
                                                @endphp
                                                </span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <a href="{{route('checkout')}}" class="btn custom-btn btn-modern w-100" style="background-color:#0088CC; color:white;">{{trans('words.checkout')}} &nbsp;<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                            <div class="form-group">
                                <a href="{{route('shop')}}" class="btn custom-btn btn-modern w-100" style="background-color:#0088CC; color:white;"><i class="fas fa-arrow-left ms-2"></i> &nbsp; {{trans('words.continue-shopping')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
  function decrement(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value--;
    target.value = value;
  }

  function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
  );

  const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
  );

  decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
  });

  incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
  });
</script>
@endsection