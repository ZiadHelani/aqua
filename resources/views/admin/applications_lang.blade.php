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
                        <th scope="col">Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($applications as $app)
                      <tr>
                        <td>{{$app->title}}</td>
                        <td>{{$app->sub_title}}</td>
                        <td>{{$app->desc}}</td>
                        <td><img width="150px" height="100px" src="{{asset('images/applications/' . $app->image)}}" alt=""></td>
                        <td>
                            <a href="{{route('edit_applications_lang', $app->id)}}" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
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
