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
                    <form action="{{route('update_products', $products->id)}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name_product_en">Name Of Product English</label>
                            <input type="text" id="name_product_en" name="name_product_en" class="form-control" value="{{$products->name_product_en}}">
                        </div>
                        <div class="form-group">
                            <label for="name_product_ar">Name Of Product Arabic</label>
                            <input type="text" id="name_product_ar" name="name_product_ar" class="form-control" value="{{$products->name_product_ar}}">
                        </div>
                        <div class="form-group">
                            <label for="desc_product_en">Description Of Product English</label>
                            <input type="text" id="desc_product_en" name="desc_product_en" class="form-control" value="{{$products->desc_product_en}}">
                        </div>
                        <div class="form-group">
                            <label for="desc_product_ar">Description Of Product Arabic</label>
                            <input type="text" id="desc_product_ar" name="desc_product_ar" class="form-control" value="{{$products->desc_product_ar}}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" id="price" name="price" class="form-control" value="{{$products->price}}">
                        </div>
                        <div class="form-group">
                            <img width="150px" height="100px" src="{{asset('images/products/' . $products->image)}}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">{{$products->image}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Categories</label> <br>
                            <select id="category" name="category" class="browser-default custom-select" aria-label="Default select example">
                                <option value="" selected>Choose Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
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
