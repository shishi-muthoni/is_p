@extends('layout')

@section('title', 'Shopping Cart')

 @section('extra-css')

@endsection 

@section('content')

    <div class="breakcrumbs">
        <div class="container">
            <a href="#">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shopping Cart</span>
        </div>
    </div> <!--end of breadcrumbs-->

    <div class="cart-section container">
        <div>
            <h2> 3 items in shopping cart</h2>\

            <div class="cart-table">
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/images/products/ava.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Avacados</a></div>
                            <div class="cart-table-description">Fresh and affordable</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a> <br>
                            <a href="#">Save for later</a>
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
                        <div>ksh 200</div>
                    </div>
                </div><!-- end of cart-table-row-->

           <div class="cart-table-row">
            <div class="cart-table-row-left">
            <a href="#"><img src="/images/products/carrots.jpg" alt="item" class="cart-table-img"></a>
            <div class="cart-item-details">
                <div class="cart-table-item"><a href="#">Carrots</a></div>
                <div class="cart-table-description">Affordable</div>
            </div>
            <div> 
                    <select class="quantity">
                      <option selected="">1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
            </div>
            <div>ksh 200</div>
            </div><!-- end cart table-row-->

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
                tax <br>
                <span class="cart-totals-total">Total</span>
            </div>
            <div class="cart-totals-subtotal">
                Ksh300 <br>
                Ksh400 <br>
                <span class="cart-totals-total">Ksh 700</span>
            </div>
        </div>
    </div>

    <div class="cart-buttons">
        <a href="#" class="button">Continue shopping</a>
        <a href="#" class="button-primary">Proceed to Chekout</a>
    </div>

    <h2>items saved for later</h2>

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
        </div><!-- end cart table row-->

    </div><!--end saved for later-->
</div>

</div><!--end cart-section-->





        

