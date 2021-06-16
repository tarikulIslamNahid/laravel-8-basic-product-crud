@extends('app')

@section('title','Update Product')
@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-8 m-auto justify-content-between d-flex mb-5">

            <a href="{{route('product')}}" class="btn btn-success btn-sm">Products</a>
            <h4 class='text-center '>Update Product</h4>

            <a href="{{route('category.index')}}" class="btn btn-success btn-sm">Categories</a>
        </div>
    </div>

    <div class="row">
        <div class="col-10 m-auto">
<form method="POST" action="{{route('product.update',$products->id)}}">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <label class='mb-2'>Product Name</label>
            <input  type="text" name="name" id="name" value='{{$products->name}}' required class="form-control @error('name') is-invalid @enderror">

          <!-- Error Alert  -->

            @error('name')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
              @enderror
          <!-- Error Alert  End-->

          </div>

          <div class="form-group col-md-6">
            <label class='mb-2'>Category</label>
            <select class="form-control @error('cat_id') is-invalid @enderror" name="cat_id" id="">
            <option value="" >Select Category</option>
            @foreach ($categories as $cat)
            <option {{($cat->id==$products->cat_id ? 'selected' :'')}} value="{{$cat->id}}">{{$cat->name}}</option>

            @endforeach
            </select>

          <!-- Error Alert  -->

            @error('cat_id')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
              @enderror
          <!-- Error Alert  End-->

          </div>
    </div>



    <div class="row mt-3 mb-5">
        <div class="form-group col-md-6">
            <label class='mb-2'>Product Price</label>
            <input  type="text" name="price" id="price" value='{{$products->price}}' required class="form-control @error('price') is-invalid @enderror">

          <!-- Error Alert  -->

            @error('price')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
              @enderror
          <!-- Error Alert  End-->

          </div>


    </div>

<button type="submit" class="btn btn-success">Create Product</button>
</form>
        </div>
    </div>
</div>

@endsection
