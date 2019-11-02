@extends('layout')

@section('title', 'Products')

@section('extra-css')


@endsection

@section('content')

<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">   -->
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">  -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="container">
<div class="row">
<div class="col col-sm-4">
<div class="breadcrumbs">                           
    <div class="container">                         
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>
    </div>                                              
</div>                                                  

<div class="products-section container">                
    <div class="sidebar">                               
    <h3>By Category</h3>
    <ul>
        <li><a href="#">Fruits</a></li>
        <li><a href="#">Vegetables</a></li>
    </ul>
</div>                                                  

<div class="products-header">                           
    <h3>By Price </h3>
    <ul>
        <li><a href="#">ksh 0 - ksh 200</a></li>
        <li><a href="#">ksh 200 - ksh 400</a></li>
        <li><a href="#">ksh 4000 - ksh 600</a></li>
    </ul>
</div>
</div>
<div class="col col-sm-8">
@foreach ($products as $product)
<div class="col">
<div class="card">
<img class="card-img-top" src="/images/products/carrots.jpg" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">{{ $product->name }}</h5>
    <p class="card-text">{{ $product->price }}</p>
    <a href="{{ route('shop.show', $product->slug) }}" class="btn btn-primary">Buy</a>
  </div>
</div>

</div>
@endforeach
</div>
    

</div>
</div>

<div class="breadcrumbs">                           
    <div class="container">                         
        <a href="#">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>
    </div>                                              
</div>                                                  

<div class="products-section container">                
    <div class="sidebar">                               
    <h3>By Category</h3>
    <ul>
        <li><a href="#">Fruits</a></li>
        <li><a href="#">Vegetables</a></li>
    </ul>
</div>                                                  

<div class="products-header">                           
    <h3>By Price </h3>
    <ul>
        <li><a href="#">ksh 0 - ksh 200</a></li>
        <li><a href="#">ksh 200 - ksh 400</a></li>
        <li><a href="#">ksh 4000 - ksh 600</a></li>
    </ul>
</div>                                                      

<h1 class="stylish-heading">Products</h1>
<div class="products text-center">                             


@foreach ($products as $product)
    <div class="product">                                       
    <a href="{{ route('shop.show', $product->slug) }} "><img src="/images/carrots.jpg" alt="product"></a>
    <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
    <a div class="product-price">{{ $product->price }}</div>
    </div>                                                          
@endforeach
</div>                                                              

</div>                                                              







