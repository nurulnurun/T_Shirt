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
            <th scope="col">Category ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

     @foreach ($category as $item)
          <tr>
            <th scope="row">{{ $item->category_id }}</th>
            <td>{{ $item->category_name	}}</td>
            <td>{{ $item->category_description }}</td>
            <td>
                <a class = "btn btn-success btn-sm" href="">Edit</a>
                <a class =  "btn btn-danger btn-sm" href="">Delete</a>
                <a class =  "btn btn-primary btn-sm" href="">View</a>
            </td>
          </tr>
    @endforeach
        </tbody>
      </table>
      {{ $category->links() }}
    </div>

@endsection




