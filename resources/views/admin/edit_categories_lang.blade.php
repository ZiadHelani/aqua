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
                        <h5>Edit {{$title}}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table" id="myTable" style="text-align: center">
                            <thead>
                              <tr>
                                <th scope="col">Category Name En</th>
                                <th scope="col">Category Name Ar</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                  <tr>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->category_name_ar}}</td>                                    
                                    <td>
                                        <a href="{{route('edit_categories', $category->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('delete_categories', $category->id)}}" class="btn btn-danger">Delete</a>
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
