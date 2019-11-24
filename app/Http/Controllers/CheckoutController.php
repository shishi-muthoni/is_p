<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use Cartalyst\Stripe\Laravel\Facades\Stripe;

use Cartalyst\Stripe\Exception\CardErrorException;



class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
            $charge = Srtipe::charges()->create([
                'amount' => Cart::total() /100,   //amount being charged for the credit card/100 to make it in shillings not cents
                'currency' => 'KSH',                //currency
                'source' => $request->stripeToken, //the source is the required token
                'description' => 'Order',           //description of the order
                'receipt_email' => $request->email, //sends email from stripe to the user
                'metadata' => [
                        //change to order /id when i use the database
                        // 'contents' => $contents,
                        // 'quantity' => Cart::instance('default')->count(),
                ],
            ]);

            return back()->with('success_message', 'Thank you :) Your payment has been accepted');
       } catch (Exception $e) {

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
