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
                    <form action="{{route('save_nearby_store', $nearby_store->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title_en">Nearby Store Title English</label>
                            <input name="title_en" id="tetitle_enxten" class="form-control" value="{{$nearby_store->title_en}}">
                        </div>
                        <div class="form-group">
                            <label for="title_ar">Nearby Store Title Arabic</label>
                            <input name="title_ar" id="title_ar" value="{{$nearby_store->title_ar}}" class="form-control" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="link_amazon">Link Of Amazon</label>
                            <input name="link_amazon" id="link_amazon" value="{{$nearby_store->link_amazon}}" class="form-control" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="link_noon">Link Of Noon</label>
                            <input name="link_noon" id="link_noon" value="{{$nearby_store->link_noon}}" class="form-control" rows="3">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
