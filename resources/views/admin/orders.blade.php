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
            <div class="card-body">
                <table class="table" id="myTable" style="text-align: center">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Created At</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->first_name}}</td>
                        <td>{{$order->last_name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->city_name}}</td>
                        <td>{{$order->total_price}}</td>
                        <td>{{$order->created_at}}</td>
                        <td><a href="{{route('show_order', $order->id)}}" class="btn btn-primary btn-sm">Show</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
    </div>
</div>
@endsection
