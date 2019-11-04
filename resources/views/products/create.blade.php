@extends('layouts.app')
@section('content')
<div class="container">
  <!-- adding enctype to support file upload -->
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">

@csrf
<div class="form-group">
    <label for="productname">Product name</label>
    <input type="text" name="name" class="form-control" id="productname" aria-describedby="productnameHelp" placeholder="Enter product name">
    <small id="productnameHelp" class="form-text text-muted">Enter the product name</small>
  </div>
  <div class="form-group">
    <label for="productprice">Price per kg</label>
    <input type="number" name="price" class="form-control" id="productname" aria-describedby="productnameHelp" placeholder="Enter product price">
    <small id="productnameHelp" class="form-text text-muted">Enter the product price</small>
  </div>
  <div class="form-group">
    <label for="productname">Description</label>
    <textarea type="text" name="description" class="form-control" rows="5" id="productname" aria-describedby="productnameHelp" placeholder="Enter a description of the product"></textarea>
    <small id="productnameHelp" class="form-text text-muted">Enter the product description</small>
  </div>
  <div class="form-group">
    <label for="productname">Details</label>
    <input type="text" name="details" class="form-control" id="productname" aria-describedby="productnameHelp" placeholder="Enter product details">
    <small id="productnameHelp" class="form-text text-muted">Enter the product Details</small>
  </div>
  <div class="form-group">
    <label for="productname">Product image</label>
    <input type="file" name="picture"  id="productname" aria-describedby="productnameHelp" >
    <small id="productnameHelp" class="form-text text-muted">Select Product Image</small>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection