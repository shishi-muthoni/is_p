@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Affordable Fruits and Vegetables</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
      <!--  <link rel="stylesheet" href="{{ asset('css/app.scss') }}">   -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
  

            <div class="content">
                <div class="title m-b-md">
                    Affordable Food Products
                </div>

              
                </div>
            </div>
        </div> 
    <body>

        <header>
            <div class="top-nav container">
                <div class="logo">Healthy & fresh fruits and Vegetables</div>
                <!-- <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cart</a></li>
                </ul> -->
            </div> <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>Healthy and Affordable</h1>
                    <p>For people who are healthy, a healthy diet is not complicated and contains mostly fruits, vegetables, and whole grains, and includes little to no processed food and sweetened beverages.</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
                </div> <!-- end food-copy -->

                <div class="hero-image">
                    <img src="images/fnv.jpg" alt="hero image">
                </div>
            </div> <!-- end food -->
        </header>

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">Get to know the farmers</h1>

                <p class="section-description text-center">For people who are healthy, a healthy diet is not complicated and contains mostly fruits, vegetables, and whole grains, and includes little to no processed food and sweetened beverages..</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="images/blog1.jpg" alt="blog image" style="width:100%"></a>
                        <a href="#"><h2 class="blog-title">Mr. Ntutu</h2></a>
                        <div class="blog-description">For people who are healthy, a healthy diet is not complicated and contains mostly fruits, vegetables, and whole grains, and includes little to no processed food and sweetened beverages.</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="images/blog2.jpg" alt="blog image" style="width:100%"></a>
                        <a href="#"><h2 class="blog-title">Miss Karanja</h2></a>
                        <div class="blog-description">For people who are healthy, a healthy diet is not complicated and contains mostly fruits, vegetables, and whole grains, and includes little to no processed food and sweetened beverages.</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="images/blog3.jpg" alt="blog image" style="width:100%"></a>
                        <a href="#"><h2 class="blog-title">Mr. Too</h2></a>
                        <div class="blog-description">For people who are healthy, a healthy diet is not complicated and contains mostly fruits, vegetables, and whole grains, and includes little to no processed food and sweetened beverages.?</div>
                    </div>
                </div> <!-- end blog-posts -->
            </div> <!-- end container -->
        </div> <!-- end blog-section -->


        


        <footer>
            <div class="footer-content container">
                <div class="made-with">Made with <i class="fa fa-heart"></i> by Sheila Maritim</div>
                <ul>
                    <li>Follow Me:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- end footer-content -->
        </footer>

    </body>
</html>

@endsection