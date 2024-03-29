<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EachProduct;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = EachProduct::inRandomOrder()->take(8)->get();

        return view('landing-page')->with('products', $products);
        
    }
}
