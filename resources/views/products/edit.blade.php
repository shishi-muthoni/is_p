@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('product.update', $product->id)}}" method="post" >
{{method_field('PUT')}}
@csrf
<div class="form-group">
    <label for="productname">Product name</label>
    <input type="text" name="name" value="{{$product->name}}" class="form-control" id="productname" aria-describedby="productnameHelp" placeholder="Enter product name">
    <small id="productnameHelp" class="form-text text-muted">Enter the product name</small>
  </div>
  <div class="form-group">
    <label for="productprice">Price per kg</label>
    <input type="number" name="price" value="{{$product->price}}"class="form-control" id="productname" aria-describedby="productnameHelp" placeholder="Enter product name">
    <small id="productnameHelp" class="form-text text-muted">Enter the product price</small>
  </div>
  <div class="form-group">
    <label for="productname">Description</label>
    <input type="text" value="{{$product->description}}" name="description" class="form-control" id="productname" aria-describedby="productnameHelp" placeholder="Enter a description of the product">
    <small id="productnameHelp" class="form-text text-muted">Enter the product price</small>
  </div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection 