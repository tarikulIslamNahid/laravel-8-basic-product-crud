@extends('app')

@section('title','Update Category')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h4 class='text-center mb-5'>Update Category</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-8 m-auto">
<form method="POST" action="{{route('category.update',$category->id)}}">
    @csrf
<div class="form-group mb-4">
  <label class='mb-2'>Category Name</label>
  <input  type="text" name="name" id="name" value="{{$category->name}}" required class="form-control @error('name') is-invalid @enderror">

<!-- Error Alert  -->

  @error('name')
  <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
<!-- Error Alert  End-->

</div>
<button type="submit" class="btn btn-success">Update Category</button>
</form>
        </div>
    </div>
</div>

@endsection
