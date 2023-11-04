@extends('Backend.Master')

@section('Master Main Content')

<div style="background-color:#000080; font-color:white">
    <h1 style="color:white">Product List</h1>
    <a href=" {{ route('Backend.Create_New_Products') }} " class="btn btn-success btn-lg">Create New Products</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Brand</th>
        <th scope="col">Product Image</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Stock</th>
        <th scope="col">Product Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($products as $key=>$product)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$product->product_id}}</td>
        <td>{{$product->brand->product_name}}</td>
        <td>{{$product->product_price}}</td>
        <td>{{$product->description}}</td>
        <td>image here</td>
        <td>{{$product->product_status}}</td>
        <td>{{$product->product_stock}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection





