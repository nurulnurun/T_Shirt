@extends('Backend.Master')

@section('Master Main Content')

<div style="background-color:#000080; font-color:white">
    <h1 style="color:white">Brand List</h1>
    <a href=" {{ route('Backend.Create_New_brands')}} " class="btn btn-success btn-lg">Create New Brand</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Brand ID</th>
        <th scope="col">Brand Name</th>
        <th scope="col">Brand Status</th>
        <th scope="col">Brand Logo</th>
        <th scope="col">Brand Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($brands as $brand)

        <tr>
            <th scope="row">{{$brand->id}}</th>
            <th scope="row">{{$brand->brand_id}}</th>
            <td> {{$brand->brand_name}} </td>
            <td> {{$brand->brand_status}} </td>
            <td> {{$brand->upload_image}} </td>
            <td> {{$brand->brand_short_description}} </td>
            <td>
                <a class = "btn btn-success" href="">Edit</a>
                <a class =  "btn btn-danger" href="">Delete</a>
                <a class =  "btn btn-primary" href="">View</a>
            </td>
        </tr>

        @endforeach
    </tbody>
  </table>

  {{ $brands->links() }}
@endsection




