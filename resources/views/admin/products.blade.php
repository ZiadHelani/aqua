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
                <table class="table" style="text-align: center">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Name ENG</th>
                        <th scope="col">Name AR</th>
                        <th scope="col">DESC ENG</th>
                        <th scope="col">DESC AR</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name_product_en}}</td>
                            <td>{{$product->name_product_ar}}</td>
                            <td>{{$product->desc_product_en}}</td>
                            <td>{{$product->desc_product_ar}}</td>
                            <td>{{$product->price}}</td>
                            <td><img width="130px" height="100px" src="{{asset('images/products/' . $product->image)}}"></td>
                            <td>
                                <a class="btn btn-success" href="{{route('edit_products', $product->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('delete_products', $product->id)}}">Delete</a>
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
                    <form action="{{route('save_products')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name_product_en">Name Of Product English</label>
                            <input type="text" id="name_product_en" name="name_product_en" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name_product_ar">Name Of Product Arabic</label>
                            <input type="text" id="name_product_ar" name="name_product_ar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="desc_product_en">Description Of Product English</label>
                            <input type="text" id="desc_product_en" name="desc_product_en" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="desc_product_ar">Description Of Product Arabic</label>
                            <input type="text" id="desc_product_ar" name="desc_product_ar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" id="price" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="lang">Categories</label> <br>
                            <select id="lang" name="category" class="browser-default custom-select" aria-label="Default select example">
                                <option value="" selected>Enter Category</option>
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
