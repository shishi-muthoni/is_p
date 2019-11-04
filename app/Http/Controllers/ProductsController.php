<?php

namespace App\Http\Controllers;
use App\EachProduct;
use Auth;
use Image;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= EachProduct::where('seller_id',Auth::id() )->get();
        return view('products.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new  EachProduct();
        $product->name = $request->name;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->slug = str_slug($product->name);
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');

            // save name with time
            $filename = time() . '.' . $picture->getClientOriginalExtension();



            Image::make($picture)->resize(250,250)->save(public_path('/images/products/' . $filename));
            $product->picture = $filename; 
        }   
        $product->seller_id = Auth::id();

        if ($product->save()) {
            
            return redirect()->route('product.index');
        }else{
            return view('products.create');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = EachProduct::where('id', $id )->first();
        return view('products.edit')->withProduct($product);    
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = EachProduct::findOrFail($id);
        $product->name = $request->name;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->price = $request->price;
        $product->slug = str_slug($product->name);
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');

            // save name with time
            $filename = time() . '.' . $picture->getClientOriginalExtension();



            Image::make($picture)->resize(250,250)->save(public_path('/images/products/' . $filename));
            $product->picture = $filename; 
        }   
        $product->seller_id = Auth::id();

        if ($product->save()) {
            
            return redirect()->route('product.index');
        }else{
            return redirect()->route('product.edit')->withProduct($product);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = EachProduct::findOrFail($id);

        if ($product->destroy())
         {
            return redirect()->route('product.index');
        }else{
            return redirect()->route('product.create')->withProduct($product);
        }
        
    }
}
