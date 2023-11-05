@extends('Backend.Master')

@section('Master Main Content')

<div style="background-color:#000080; font-color:white">
    <h1 style="color:white">Create New Product</h1>
    <a href="" class="btn btn-success btn-lg">Show All Product Lists</a>
</div>

<form action=" {{ route('product.store') }} " method="post">
    @csrf
    <div class="mb-3">
        <label for="productid" class="form-label">Product ID</label>
        <input type="text" class="form-control" id="" name="product_id" placeholder="Enter a Product ID" required>
      </div>
      <div class="mb-3">
        <label for="selectbrand" class="form-label">Select Brand</label>
        <select name="brand_id" id="">
            <option>Select Brand Name</option>
            @foreach($brands as $brand)
            <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
            @endforeach
        </select>
      </div>
    <div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="" name="product_name" placeholder="Enter a Product Name" required>
    </div>

    <div class="mb-3">
        <label for="productImage" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="" name="product_image" placeholder="Choose a any Product Image">
    </div>
    <div class="mb-3">
        <label for="productPrice" class="form-label">Enter Price</label>
        <input type="number" class="form-control" id="" name="product_price" placeholder="Enter a Product Price" required>
    </div>
    <div class="mb-3">
        <label for="productStock" class="form-label">Enter Stock</label>
        <input type="number" class="form-control" id="" name="product_stock" placeholder="Enter a Product Stock" required>
    </div>
    <div class="mb-3">
        <label for="productStatus" class="form-label">Product Status</label>
        <input type="text" class="form-control" id="" name="product_status" placeholder="Enter a Product Status">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection




