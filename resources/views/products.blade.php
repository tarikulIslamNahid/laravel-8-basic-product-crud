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
           <div class="col-8 m-auto justify-content-between d-flex mb-4">

               <a href="#" class="btn btn-success btn-sm">Create Product</a>
               <h5 class='text-center'>Product Crud</h5>
               <a href="{{route('category.create')}}" class="btn btn-success btn-sm">Create Category</a>
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-8 m-auto">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>

                </tbody>
              </table>
           </div>
       </div>
   </div>
   @endsection
