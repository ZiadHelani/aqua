@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif(session()->has('error'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session()->get('error')}}
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
                    <img style="object-fit: cover" width="300px" height="200px" src="{{asset('images/about-us-images/' . $image->image)}}" alt="">
                    <form action="{{route('save_about_us_images', $image->id)}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="validatedCustomFile">Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">{{$image->image}}</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top:20px;">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
