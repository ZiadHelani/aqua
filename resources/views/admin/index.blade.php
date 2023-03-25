@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
              <h5>{{$product_count}}</h5>
              <p>Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-gradient-warning">
            <div class="inner">
              <h5>{{$categories_count}}</h5>
              <p>Categories</p>
            </div>
            <div class="icon">
                <i class="fa-brands fa-shopify"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
              <h5>{{$orders_count}}</h5>
              <p>Orders</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-gradient-success">
          <div class="inner">
            <h5>{{$all_orders_price . ' ' . 'AED'}}</h5>
            <p>All Orders Cost</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-dollar-sign"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
    </div>
</div>
@endsection
