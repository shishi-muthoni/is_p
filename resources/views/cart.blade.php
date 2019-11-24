@extends('layout')

@section('title', 'Shopping Cart')

 @section('extra-css')

@endsection 

@section('content')

<link rel="stylesheet" href="{{ asset('css/cart.css') }}"> 

@component('components.breadcrumbs')
    <div class="breakcrumbs">
        <div class="container">
            <a href="/landing-page">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shopping Cart</span>
        </div>
    </div> <!--end of breadcrumbs-->
@endcomponent
    <div class="cart-section container">
        <div>
        @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Cart::count() > 0)
        <h2>{{ Cart::count() }}  item(s) in shopping cart</h2>
       
            

            <div class="cart-table">
                @foreach (Cart::content() as $item)

          <div class="cart-table-row"> <!--used for looping each item of the cart-->
                    <div class="cart-table-row-left">
                        <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ asset('images/products/'.$item->model->picture) }}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                            <div class="cart-table-description">{{ $item->model->details }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <!-- <a href="#">Remove</a> <br> -->
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                    <button type="submit" class="cart-options">Remove</button>
                            </form>

                            <!-- <a href="#">Save for later</a> -->
                        </div>
                        </div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>{{ $item->model->presentPrice() }}</div>
                    </div>
                </div><!-- end of cart-table-row-->
                @endforeach

            

        </div><!-- end cart-table-->

        <a href="#" class="have-code">Have a code?</a>

        <div class="have-code-container">
            <form action="#">
                <input type="text">
                <button type="submit" class="button button-plain">Apply</button>
            </form>
        </div>

        <div class="cart-totals">
            <div class="cart-totals-left">
            Please contact your preferred transporter for delivery
            </div>

            <div class="cart-totals-right">
                <div>
                Subtotal <br>
                tax 11%<br>
                <span class="cart-totals-total">Total</span>
            </div>
            <div class="cart-totals-subtotal">
                {{ Cart::subtotal() }} <br>
                {{ Cart::tax() }} <br>
                <span class="cart-totals-total">{{ Cart::total() }}</span>
            </div>
        </div>
    </div>

    <div class="cart-buttons">
        <a href="#" class="button">Continue shopping</a>
        <a href="#" class="button-primary">Proceed to Checkout</a>
    </div>

        @else

            <h3>No items in the cart</h3>
            <div class="spacer"></div>   <!-- utility for adding space-->
            <a href="{{ route('shop.index') }}" class="button">Continue Shopping?</a>  <!--to go back to the shopping page when there are no items in cart-->
            <div class="spacer"></div>
        @endif
    <!-- <h2>2 items saved for later</h2>

    <div class="saved-for-later cart-table">
        <div class="cart-table-row">
            <div class="cart-table-row-left">
            <a href="#"><img src="/images/products/ava.jpg" alt="item" class="cart-table-img"></a>
            <div class="cart-item-details">
                <div class="cart-table-item"><a href="#">avacados</a></div>
                <div class="cart-table-description">affordable and healthy</div>
            </div>
            </div>
            <div class="cart-table-row-right">
                <div class="cart-table-actions">
                    <a href="#">Remove</a> <br>
                    <a href="#">Save for later</a>
                </div>

                <div>Ksh300</div>
            </div>
        </div> end cart table row

    </div>end saved for later -->
</div>

</div><!--end cart-section-->
@endsection

        

