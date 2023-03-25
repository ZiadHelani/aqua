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
                    <form action="{{route('update_our_client', $client->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="client_name">Client Name</label>
                            <input name="client_name" id="client_name" class="form-control" value="{{$client->client_name}}">
                        </div>
                        <div class="form-group">
                            <label for="client_job">Client Job</label>
                            <input name="client_job" id="client_job" value="{{$client->client_job}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Client Image</label>
                            <div class="form-group">
                                <img width="200px" height="150px" src="{{asset('images/our-client/' . $client->image)}}" alt="">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">{{$client->image}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_opinion">Client Opinion</label>
                            <input name="client_opinion" id="client_opinion" value="{{$client->client_opinion}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
