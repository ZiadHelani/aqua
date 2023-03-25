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
                    <form action="{{route('save_contact_info', $contact->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" id="email" class="form-control" value="{{$contact->email}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input name="address" id="address" value="{{$contact->address}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" value="{{$contact->phone}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="touch">Get In Touch</label>
                            <input id="touch" name="touch" value="{{$contact->touch}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="form-header">
                                <h5>Follow US :</h5>
                            </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="facebook_link">Facebook</label>
                                <input id="facebook_link" name="facebook_link" value="{{$contact->facebook_link}}" class="form-control">
                            </div>
                            <div class="col">
                                <label for="instagram_link">Instagram</label>
                                <input id="instagram_link" name="instagram_link" value="{{$contact->instagram_link}}" class="form-control">
                            </div>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
