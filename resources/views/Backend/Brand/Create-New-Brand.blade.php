@extends('Backend.Master')

@section('Master Main Content')

<div>
    <div style="background-color:#000080; font-color:white">
        <h1 style="color:white">Create New Brand</h1>
        <a href="#" class="btn btn-success btn-lg">Show Brand List</a>
    </div>
</div><br><br>

<form action = " {{ route('brand_store')}} " method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Enter Brand ID</label>
        <input type="text" id="" class="form-control" name="brand_id" placeholder="Enter Brand ID">
      </div>
    <div class="mb-3">
      <label class="form-label">Enter Brand Name</label>
      <input type="text" id="" class="form-control" name="brand_name" placeholder="Enter Brand Name">
    </div>
    <div class="mb-3">
        <label class="form-label">Brand Status</label>
        <input type="text" id="" class="form-control" name="brand_status" placeholder="Enter Brand Status">
      </div>
    <div class="mb-3">
      <label class="form-label">Upload Logo</label>
      <input type="file" class="form-control" id="" name="upload_image" palceholder="Please Select the Logo">
    </div>
    <div class="mb-3 form-check">
        <label for="">Brand Description</label>
      <textarea class="form-control" name="brand_short_description" id="" cols="10" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection




