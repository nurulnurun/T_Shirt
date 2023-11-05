@extends('Backend.Master')

@section('Master Main Content')

<div style="background-color:#000080; font-color:white">
    <h1 style="color:white">Product List</h1>
    <a href=" {{ route('Backend.Create_New_Products') }} " class="btn btn-success btn-lg">Create New Products</a>
</div>

<div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Brand ID</th>
        <th scope="col">Product Image</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Stock</th>
        <th scope="col">Product Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($products as $item)
      <tr>
        <th scope="row">{{ $item->product_id }}</th>
        <td>{{ $item->product_name }}</td>
        <td>{{ $item->brand_name }}</td>
        <td>{{ $item->product_image }}</td>
        <td>{{ $item->product_price }}</td>
        <td>{{ $item->product_stock }}</td>
        <td>{{ $item->product_status}}</td>
        <td>
            <a class = "btn btn-success btn-sm" href="">Edit</a>
            <a class =  "btn btn-danger btn-sm" href="">Delete</a>
            <a class =  "btn btn-primary btn-sm" href="">View</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

  {{ $products->links() }}

</div>


@endsection





