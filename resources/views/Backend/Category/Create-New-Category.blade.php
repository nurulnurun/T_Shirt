@extends('Backend.Master')

@section('Master Main Content')

<div style="background-color:#000080; font-color:white">
    <h1 style="color:white">Create New Category</h1>
    <a href="#" class="btn btn-success btn-lg">Show all Categories</a>
</div>


<form action=" {{ route('category.store') }} " method="post">
    @csrf
    <div class="mb-3">
        <label for="productid" class="form-label">Category ID</label>
        <input type="text" class="form-control" id="" name="category_id" placeholder="Enter a Product ID" required>
      </div>

    <div class="mb-3">
      <label for="categoryName" class="form-label">Category Name</label>
      <input type="text" class="form-control" id="" name="category_name" placeholder="Enter a Category Name" required>
    </div>

    <div class="mb-3">
        <label for="categoryDescription" class="form-label">Category Description</label><br>
        <textarea name="category_description" id="" cols="70" rows="10" style="background-color:#B1AAC5; color:#251848"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection



