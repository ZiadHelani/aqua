@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Uploaded</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif(session()->has('error'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Failed</strong>
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
                        <td><img width="150px" height="120px" src="{{asset('images/home-header/' . $image->image)}}" alt=""></td>
                        <td>
                            <a class="btn btn-success" href="{{route('edit_header_image', $image->id)}}">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
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
