<div  class="addToCartIcon">
        <div><img src="{{ asset('frontend/images/icon/cart.png') }}" class="img-fluid  blur-up lazyload" alt=""></div>
        <span class="cart_qty_cls">{{ isset($userOrder) ? $userOrder->order_details->count() : 0 }}</span>
    </div>