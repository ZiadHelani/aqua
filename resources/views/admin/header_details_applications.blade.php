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
                    <form action="{{route('save_header_details_applications',$details->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="title_en">Title English</label>
                                <input name="title_en" id="title_en" class="form-control" value="{{$details->title_en}}">
                            </div>
                            <div class="col">
                                <label for="title_ar">Title Arabic</label>
                                <input name="title_ar" id="title_ar" value="{{$details->title_ar}}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="sub_title_en">Sub Title English</label>
                                <input name="sub_title_en" id="sub_title_en" value="{{$details->sub_title_en}}" class="form-control" >
                            </div>
                            <div class="col">
                                <label for="sub_title_ar">Sub Title Arabic</label>
                                <input name="sub_title_ar" id="sub_title_ar" value="{{$details->sub_title_ar}}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="desc_en">Description English</label>
                                <input name="desc_en" id="desc_en" value="{{$details->desc_en}}" class="form-control" >
                            </div>
                            <div class="col">
                                <label for="desc_ar">Description Arabic</label>
                                <input name="desc_ar" id="desc_ar" value="{{$details->desc_ar}}" class="form-control" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
