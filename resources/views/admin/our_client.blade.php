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
                <table class="table" style="text-align: center">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Job</th>
                        <th scope="col">Opinion</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach($clients as $client)
                        <td><img width="150px" height="100px" src="{{asset('images/our-client/' . $client->image)}}" alt=""></td>
                        <td>{{$client->client_name}}</td>
                        <td>{{$client->client_job}}</td>
                        <td>{{$client->client_opinion}}</td>
                        <td>
                            <a href="{{route('edit_our_client', $client->id)}}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{route('delete_our_client', $client->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
            <div class="card">
                <div class="card-header">
                    <h5>Add {{$title}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_our_client')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="client_name">Client Name</label>
                            <input name="client_name" id="client_name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="client_job">Client Job</label>
                            <input name="client_job" id="client_job" value="" class="form-control" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Client Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose Image..</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client_opinion">Client Opinion</label>
                            <input name="client_opinion" id="client_opinion" value="" class="form-control" rows="3">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">About Our Clients</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('update_about_our_clients', $about->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title_en">Title English</label>
                        <input name="title_en" id="title_en" value="{{$about->title_en}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title_ar">Title Arabic</label>
                        <input name="title_ar" id="title_ar" value="{{$about->title_ar}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="validatedCustomFile">Image</label>
                        <div class="form-group">
                            <img width="200px" height="150px" src="{{asset('images/about-our-clients/' . $about->image)}}" alt="">
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">{{$about->image}}</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                </div>
            </div>
    </div>
</div>
@endsection
