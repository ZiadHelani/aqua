@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session()->get('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif(session()->has('error'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{session()->get('error')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <div class="card">
            <div class="card-header">
                <h5>{{$title}}</h5>
            </div>
            <div class="row card-body">
                <dt class="col-md-4">First Name: </dt>
                <dd class="col-md-8">{{$order->first_name}}</dd>
                <dt class="col-md-4">Last Name: </dt>
                <dd class="col-md-8">{{$order->last_name}}</dd>
                @if($order->company_name)
                  <dt class="col-md-4">Company Name: </dt>
                  <dd class="col-md-8">{{$order->company_name}}</dd>
                @endif
                <dt class="col-md-4">Country Name: </dt>
                <dd class="col-md-8">{{$order->shipping->country_name}}</dd>
                <dt class="col-md-4">Country Cost: </dt>
                <dd class="col-md-8">{{'AED' . ' ' . $order->shipping->shipping_cost}}</dd>
                <dt class="col-md-4">Street Name: </dt>
                <dd class="col-md-8">{{$order->street_name}}</dd>
                <dt class="col-md-4">Apartment: </dt>
                <dd class="col-md-8">{{$order->apartment}}</dd>
                <dt class="col-md-4">City Name: </dt>
                <dd class="col-md-8">{{$order->city_name}}</dd>
                <dt class="col-md-4">ZIP: </dt>
                <dd class="col-md-8">{{$order->zip}}</dd>
                <dt class="col-md-4">Phone Number: </dt>
                <dd class="col-md-8">{{$order->phone_number}}</dd>
                <dt class="col-md-4">Email: </dt>
                <dd class="col-md-8">{{$order->email}}</dd>
                @if($order->order_notes)
                  <dt class="col-md-4">Order Notes: </dt>
                  <dd class="col-md-8">{{$order->order_notes}}</dd>
                @endif
                <dt class="col-md-4">Total Price:</dt>
                <dd class="col-md-8">{{$order->total_price  . ' ' . 'AED'}}</dd>
                <dt class="col-md-4">Created At: </dt>
                <dd class="col-md-8">{{$order->created_at}}</dd>
                <dt class="col-md-4">Status Order: </dt>
                <dd class="col-md-8">{{$order->status}}</dd>
            </div>
          </div>
          
          
          
          <div class="card">
            <div class="card-header">
                <h5>{{$title}}</h5>
            </div>
            <div class="card-body table-responsive p-2">
                <table class="table" id="myTable" style="text-align: center;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Product ENG</th>
                      <th>Product AR</th>
                      <th>Category</th>
                      <th>Quantity</th>
                      <th>Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orderData as $orderData)
                      <tr>
                        <td>{{$orderData->id}}</td>
                        <td>{{$orderData->products->name_product_en}}</td>
                        <td>{{$orderData->products->name_product_ar}}</td>
                        <td>{{$orderData->products->categories->category_name}}</td>
                        <td>{{$orderData->quantity}}</td>
                        <td>{{$orderData->total . ' ' . 'AED'}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
    </div>
</div>


@endsection
