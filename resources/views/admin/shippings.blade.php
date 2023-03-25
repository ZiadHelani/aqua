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
                        <th scope="col">Country Name</th>
                        <th scope="col">Shipping Cost</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($shippings as $ship)
                      <tr>
                        <td>{{$ship->country_name}}</td>
                        <td>{{$ship->shipping_cost . ' ' . 'AED'}}</td>
                        <td>
                            <a href="{{route('edit_shippings', $ship->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('delete_shippings', $ship->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
            <div class="card">
                <div class="card-header">
                    <h5>{{$title}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_shippings')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="country_name">Country Name</label>
                            <input name="country_name" id="country_name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="shipping_cost">Shipping Cost</label>
                            <input name="shipping_cost" id="shipping_cost" value="" class="form-control" rows="3">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
