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
                    <h5>Add {{$title}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('update_applications_lang', $applications->id)}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{$applications->title}}">
                        </div>
                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" id="sub_title" name="sub_title" class="form-control" value="{{$applications->sub_title}}">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" id="desc" name="desc" class="form-control" value="{{$applications->desc}}">
                        </div>
                        <div class="form-group">
                            <img width="200px" height="150px" src="{{asset('images/applications/' . $applications->image)}}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
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
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
