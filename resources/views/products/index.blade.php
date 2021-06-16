@extends('app')
@section('title','products Crud')
@section('content')

   <div class="container mt-5">
    <div class="row mb-5">
        <div class="col-12">

            <a href="{{route('category.index')}}" class="btn btn-success btn-sm">Categories</a>
        </div>
    </div>
       <div class="row">
        @if (session('proCreate'))
        <div class="alert alert-success">
            {{ session('proCreate') }}
        </div>
    @endif

    @if (session('proDelete'))
    <div class="alert alert-danger">
        {{ session('proDelete') }}
    </div>
@endif
@if (session('proUpdate'))
<div class="alert alert-success">
    {{ session('proUpdate') }}
</div>
@endif
           <div class="col-8 m-auto justify-content-between d-flex mb-4">

               <a href="{{route('category.create')}}" class="btn btn-success btn-sm">Create Categories</a>
               <h5 class='text-center'>Product Crud</h5>
               <a href="{{route('product.create')}}" class="btn btn-success btn-sm">Create Product</a>
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-8 m-auto">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                    <tr>
                        <th scope="row">{{($products->currentpage()-1) * $products  ->perpage() + $key + 1 }}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a class='btn btn-sm btn-primary' href="{{route('product.edit',$product->id)}}">Edit</a>
                            <a class='btn btn-sm btn-danger' href="{{route('product.destroy',$product->id)}}">Delete</a>
                        </td>
                      </tr>
                    @endforeach


                </tbody>
              </table>
              {{ $products->links() }}
           </div>
       </div>
   </div>
   @endsection
