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
                    <form action="{{route('save_header_image_about_us',$header->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="texten">About Us English</label>
                            <input name="texten" id="texten" class="form-control" value="{{$header->text_en}}">
                        </div>
                        <div class="form-group">
                            <label for="textar">About Us Arabic</label>
                            <input name="textar" id="textar" value="{{$header->text_ar}}" class="form-control" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Image</label>
                            <div class="form-group">
                                <img width="200px" height="150px" src="{{asset('images/header-image-about-us/' . $header->image)}}" alt="">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">{{$header->image}}</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
