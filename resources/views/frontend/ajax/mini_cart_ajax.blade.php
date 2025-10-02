<ul class="show-div shopping-cart">

    <div class="d-flex justify-content-between align-items-center ">
        <p class="mb-0">There is {{ isset($userOrder) ? $userOrder->order_details->count() : 0 }} products</p>
        <a id="closeCart" class="text-danger"><i class="fa fa-2x fa-times" aria-hidden="true"></i></a>
    </div>
    <hr class="my-3">
    <div class="mini-cart-items">
        @if(isset($userOrder))
            @foreach($userOrder->order_details as $orderDetail)
        <li>
            <div class="media">
                <a><img alt="" class="me-3"
                        src="{{ asset('products/'. $orderDetail->product->image) }}"></a>
                <div class="media-body">
                    <a>
                        <h4>{{ $orderDetail->product->en_name }}</h4>
                    </a>
                    <h4>{{ $orderDetail->quantity }} x <b>EGP {{ $orderDetail->price }}</b></h4>
                </div>
            </div>
            {{-- <div class="close-circle">


                    <a href="{{ route('delete-from-cart', $orderDetail->id) }}"><i class="fa fa-times"
                        aria-hidden="true"></i></a>

            </div> --}}
        </li>
        @endforeach
    </div>
    <div class="mini-cart-footer">
        <ul>
        <li>
            <div class="total">
                <h5>subtotal : <span>{{ $userOrderSubTotal }} EGP</span></h5>
            </div>
        </li>
        @if($userOrderPromoInNumber != NULL)
        <div class="row no-gutters justify-content-between">
            <p>Discount : </p>
            <p class="fs-18 fw-700">EGP {{ $userOrderPromoInNumber }}</p>
        </div>
        @endif
        <li>
            <div class="total">
                <h5>Total : <span>{{ $userOrderTotal }} EGP</span></h5>
            </div>
        </li>
        <li>
            <div class="buttons"><a href="{{ route('cart') }}" class="view-cart">view
                    cart</a> <a href="{{ route('shipping-address') }}" class="checkout">checkout</a></div>
        </li>
    </div>
    @else
    <h4>No Shopping cart</h4>
    <div class="mini-cart-footer">
        <ul>
            <li>
                <div class="total">
                    <h5>Total : <span>0 EGP</span></h5>
                </div>
            </li>
            <li>
                <div class="buttons">
                    <a href="{{ route('cart')}}" class="view-cart">view cart</a>
                    <a href="{{ route('shop')}}" class="checkout">Add Items</a>
                </div>
            </li>
        </ul>
    </div>
    @endif
</ul>

