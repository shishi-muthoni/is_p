@extends('layout')

@section('title', $product->name)

@section('extra-css')

@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <a href="/">Home></a> <!-- / takes you back to a previous page-->
        <i class="fa fa-chevro-right breadcrumb-separator"></i>
       <!--<a href ="{{ route('shop.index') }}"> -->
        <span><a href="{{ route('shop.index') }}">Shop></a></span>
        <i clas="fa fa-chevron-right breadcrumb-separator"></i>
        <span>tomatoes</span>
    </div>

 </div><!-- end of breadcrumbs-->
 

 <div class="product section container">
    <div class="product-section-image">
        <img src="{{asset('images/products/carrots.jpg') }}" alt="product">
     
    </div>

 <div class="product-sectiom-information">
    <h1 class="product-section-title">{{ $product->name }}</h1> 
    <div class="product-section-subtitle">{{ $product->details }}</div>   
    <div class="product-section-price">{{ $product->price }}</div>     

    <p>
    {{ $product->description }}
    </p>

  <p>&nbsp;</p>

    <!-- <a href="#" class="button">Add to Cart</a> -->

        <form action="{{ route('cart.store' )}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->name }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <button type="submit" class="button button-pain">Add to cart</button>
        </form>
  </div>
  </div>

  @endsection




