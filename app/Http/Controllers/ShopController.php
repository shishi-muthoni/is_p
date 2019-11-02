<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EachProduct;
use App\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $products = EachProduct::inRandomOrder()->take(8)->get();

        return view('shop')->with('products', $products);
    }

    /**
     * Display the specified resource
     * 
     * @param string $slug
     * @return \Illumnate\Http\Response
     * 
     */
    public function show($slug)
    {
            $product = EachProduct::where('slug', $slug)->firstOrFail();

            return view('EachProduct')->with('product', $product);
    }
}
