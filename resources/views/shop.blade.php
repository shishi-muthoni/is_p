@extends('layout')

@section('title', 'Products')

@section('extra-css')


@endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

<link rel="stylesheet" href="{{ asset('css/shop.css') }}"> 



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
    <a href="#"><img src="/images/carrots.jpg" alt="product"></a>
    <a href="#"><div class="product-name">{{ $product->name }}</div></a>
    <a div class="product-price">{{ $product->price }}</div>
    </div>
@endforeach
</div>

</div>







