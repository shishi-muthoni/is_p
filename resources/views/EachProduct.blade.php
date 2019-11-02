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
        <img src="{{asset('images/products/tomatoes.jpg') }}" alt="product">
     
    </div>

 <div class="product-sectiom-information">
    <h1 class="product-section-title">{{ $product->name }}</h1> 
    <div class="product-section-subtitle">{{ $product->details }}</div>   
    <div class="product-section-price">{{ $product->price }}</div>     

    <p>
    {{ $product->description }}
    </p>

  <p>$nbsp;</p>

  <a href="#" class="button">Add to Cart</a>
  </div>
  </div>

  