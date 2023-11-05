@extends('Backend.Master')

@section('Master Main Content')

<div style="background-color:#000080; font-color:white">
    <h1 style="color:white">Categories List</h1>
    <a href=" {{ route('Backend.Create_New_Category') }} " class="btn btn-success btn-lg">Create New Category</a>
</div>

<div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Description</th>
            <th scope="col">Category Status</th>
          </tr>
        </thead>
        <tbody>


          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td>
                <a class = "btn btn-success btn-sm" href="">Edit</a>
                <a class =  "btn btn-danger btn-sm" href="">Delete</a>
                <a class =  "btn btn-primary btn-sm" href="">View</a>
            </td>
          </tr>

        </tbody>
      </table>

    </div>

@endsection




