@extends('layouts.app')
@section('content')

<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td>
        <a class="btn btn-success" href="{{ route('product.edit', $product->id)}}">Edit</a>
        <form action="{{route('product.destroy',  $product->id )}}" method="post">
        @method('DELETE')
        @csrf
        
        <a class="btn-danger btn" href="{{ route('product.destroy', $product->id)}}">Delete</a>
        </form>
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection