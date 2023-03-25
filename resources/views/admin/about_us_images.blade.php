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
                <h5>Edit {{$title}}</h5>
            </div>
            <div class="card-body">
                <table class="table" style="text-align: center">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $image)
                      <tr>
                        <td><img width="150px" height="100px" src="{{asset('images/about-us-images/' . $image->image)}}" alt=""></td>
                        <td>
                            <a href="{{route('edit_about_us_images', $image->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('delete_about_us_images', $image->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
    </div>
</div>
@endsection
