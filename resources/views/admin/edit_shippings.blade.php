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
                    <form action="{{route('update_shippings', $shippings->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="country_name">Country Name</label>
                            <input name="country_name" id="country_name" class="form-control" value="{{$shippings->country_name}}">
                        </div>
                        <div class="form-group">
                            <label for="shipping_cost">Shipping Cost</label>
                            <input name="shipping_cost" id="shipping_cost" value="{{$shippings->shipping_cost}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
