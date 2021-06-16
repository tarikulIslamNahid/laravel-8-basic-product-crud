@extends('app')

@section('title','Create Category')
@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-8 m-auto justify-content-between d-flex mb-5">

            <a href="{{route('product')}}" class="btn btn-success btn-sm">Products</a>
            <h4 class='text-center '>Create Category</h4>

            <a href="{{route('category.index')}}" class="btn btn-success btn-sm">Categories</a>
        </div>
    </div>

    <div class="row">
        <div class="col-8 m-auto">
<form method="POST" action="{{route('category.store')}}">
    @csrf
<div class="form-group mb-4">
  <label class='mb-2'>Category Name</label>
  <input  type="text" name="name" id="name" required class="form-control @error('name') is-invalid @enderror">

<!-- Error Alert  -->

  @error('name')
  <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
<!-- Error Alert  End-->

</div>
<button type="submit" class="btn btn-success">Create Category</button>
</form>
        </div>
    </div>
</div>

@endsection
