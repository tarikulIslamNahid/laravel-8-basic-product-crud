@extends('app')

@section('title','Create Category')
@section('content')

<div class="container mt-5">

    <div class="row mb-5">
        <div class="col-12">

            <a href="{{route('product')}}" class="btn btn-success btn-sm">Products</a>
        </div>
    </div>

    <div class="row">
        <div class="col-8 m-auto justify-content-between d-flex mb-4">

            <a href="{{route('product.create')}}" class="btn btn-success btn-sm">Create Product</a>
            <h5 class='text-center'>Category List</h5>
            <a href="{{route('category.create')}}" class="btn btn-success btn-sm">Create Category</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-8 m-auto">
            @if (session('catCreate'))
            <div class="alert alert-success">
                {{ session('catCreate') }}
            </div>
        @endif

        @if (session('catDelete'))
        <div class="alert alert-danger">
            {{ session('catDelete') }}
        </div>
    @endif
    @if (session('catUpdate'))
    <div class="alert alert-success">
        {{ session('catUpdate') }}
    </div>
@endif
         <table class="table">
             <thead>
               <tr>
                 <th width="10%">#</th>
                 <th width="70%">Name</th>
                 <th width="20%">Actions</th>
               </tr>
             </thead>
             <tbody>
                 @foreach ($categories as $key => $category)
                 <tr>
                    <th scope="row">{{($categories->currentpage()-1) * $categories  ->perpage() + $key + 1 }}</th>
                    <td>{{$category->name}}</td>
                    <td>
                        <a class='btn btn-sm btn-primary' href="{{route('category.edit',$category->id)}}">Edit</a>
                        <a class='btn btn-sm btn-danger' href="{{route('category.destroy',$category->id)}}">Delete</a>
                    </td>
                  </tr>
                 @endforeach


             </tbody>

           </table>
           {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection
