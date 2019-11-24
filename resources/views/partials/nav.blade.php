<header>
    <div class="top-nav container">
        <div class="logo"><a href="/">Affordable Food</a></div>
        @if (! request()->is('checkout'))

        <ul>

        <li><a href="/landing-page">Home</a></li> <!--back to home-->
        <li><a href="{{ route('shop.index') }}">Shop</a></li>
        <li><a href="#">About</a></li>
        
        <li>
            <a href="{{ route('cart.index') }}">Cart <span class="cart-count"> <!-- to show the number of items in the cart-->
                @if (Cart::instance('default')->count() > 0) <!-- if there are zero items in the cart it wont show zero it will only count for >0 -->
                <span>{{ Cart::instance('default')->count() }}</span></span>
                @endif
            </a>
        </li>
    </ul>
    @endif
    </div>
</header>