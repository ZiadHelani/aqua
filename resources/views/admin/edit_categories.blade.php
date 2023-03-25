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
                    <form action="{{route('update_categories', $categories->id)}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Category Name En</label>
                            <input type="text" id="category_name" name="category_name" class="form-control" value="{{$categories->category_name}}">
                        </div>
                        <div class="form-group">
                            <label for="category_name">Category Name Ar</label>
                            <input type="text" id="category_name" name="category_name_ar" class="form-control" value="{{$categories->category_name}}">
                        </div>
                        <!--<div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" id="desc" name="desc" class="form-control" value="{{$categories->desc}}">
                        </div>
                        <div class="form-group">
                            <img width="150px" height="100px" src="{{asset('images/categories/' . $categories->image)}}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">{{$categories->image}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lang">Language</label> <br>
                            <select id="lang" name="lang" class="browser-default custom-select" aria-label="Default select example">
                                <option value="1" selected>Enter Language (Default English)</option>
                                @foreach($langs as $lang)
                                <option value="{{$lang->id}}">{{$lang->lang == 'en' ? 'English' : 'Arabic'}}</option>
                                @endforeach
                              </select>
                        </div>-->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
