


@if(isset($userOrder))

<div class="cart_gallery">
    <div id="ajaxLoader" style="display: none">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
    @if(app()->getLocale() == 'en')
    <div class="cart_header">
        <h4 class="mb-0">Cart</h4>
    </div>
    @else 
    <div class="cart_header">
        <h4 class="mb-0">السله</h4>
    </div>
    @endif
    @foreach($userOrder->order_details as $orderDetail)
    <input type="hidden" name="order_id" id="order_id" value="{{ $orderDetail->order_id }}">

    <div class="cart_item">
        <div class="cart_img">
            <a><img src="{{ asset('products/'. $orderDetail->product->image) }}" alt=""></a>
        </div>

        <div class="cart_info">
             @if(app()->getLocale() == 'en')
            <a>{{ $orderDetail->product->en_name }}</a>
            @else 
            <a>{{ $orderDetail->product->ar_name }}</a>
            @endif
            {{-- <p>{{$orderDetail->quality}} x <span> {{ $orderDetail->price*$orderDetail->quantity }} SAR </span></p> --}}
            <div class="d-flex align-items-center justify-content-between">
                <div class="qty-box">
                    <div class="input-group justify-content-start">
                        <span class="input-group-prepend">
                            <button type="button" onclick="updateCart({{$orderDetail->product->id}}, {{ ($orderDetail->quantity)-1 }}, jQuery('#lang').val())"  class="btn quantity-left-minus" {{ $orderDetail->quantity == 1 ? 'disabled' : null }} data-type="minus" data-field="quantity{{$orderDetail->product->id}}">
                                <span class="fa fa-angle-left"></span>
                            </button>

                        </span>
                        <input type="text" name="quantity{{$orderDetail->product->id}}" id="quantity{{$orderDetail->product->id}}" class="form-control input-number" value="{{$orderDetail->quantity}}" min="1" max="50" disabled>
                        <span class="input-group-prepend">

                            <button type="button" onclick="updateCart({{$orderDetail->product->id}}, {{ ($orderDetail->quantity)+1 }}, jQuery('#lang').val())" class="btn quantity-right-plus" {{ $orderDetail->quantity == 50 ? 'disabled' : null }} data-type="plus" data-field="quantity{{$orderDetail->product->id}}">
                                <span class="fa fa-angle-right"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div>
                </div>
                @if(app()->getLocale() == 'en')
                 <span> {{ $orderDetail->price*$orderDetail->quantity }} SAR </span>
                 @else
                 <span> {{ $orderDetail->price*$orderDetail->quantity }} ر.س </span>
                 @endif
                </div>


        </div>
        <div class="cart_remove">
            <a onclick="removeFromCart({{$orderDetail->id}}, $('#lang').val())"><i class="icon-x"></i></a>
        </div>
    </div>
    @endforeach
</div>
<div class="mini_cart_footer">
    <div class="mini_cart_subtotal">
        <!--<div class="cart_table_border row mx-0 no-gutters">-->
        <!--    <div class="col-md-7">-->
        <!--        <input placeholder="Coupon code" type="text" class="form-control h-100">-->
        <!--    </div>-->
        <!--    <div class="col-md-5">-->
        <!--        <button class="btn btn-primary" onclick="applyCoupon(jQuery('#promo_code').val(), $('#lang').val())">Apply Coupon</button>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="cart_table_border">

           
            @if($userOrderPromoInNumber != NULL)
            @if(app()->getLocale() == 'en')
            <div class="discount d-flex justify-content-between align-items-center my-3">
                <h6 class="mb-0">Discount :</h6> <span class="text-success" style="font-weight: 700;">{{ $userOrderPromoInNumber }} SAR (-50%)</span>
            </div>
            @else 
            <div class="discount d-flex justify-content-between align-items-center my-3">
                <h6 class="mb-0">الخصم :</h6> <span class="text-success" style="font-weight: 700;">{{ $userOrderPromoInNumber }} ر.س (-50%)</span>
            </div>
            @endif
            @endif
            @if(app()->getLocale() == 'en')
            <div class="cart_total mt-10">
                <span>Total:</span>
                <span class="price">SAR{{ $userOrderTotal }}</span>
            </div>
            @else
            <div class="cart_total mt-10">
                <span>الاجمالي:</span>
                <span class="price">ر.س {{ $userOrderTotal }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="cart__buttons">


        <div class="cart_button">
            <a href="{{ route('shipping-address') }}"><i class="fa fa-sign-in"></i> Checkout</a>
        </div>
    </div>

</div>

@else
<div class="row">
    <div class="col-12 text-center">
      <i class="fa fa-cart-plus fa-2x py-4 text-gray" aria-hidden="true"></i>
      <h4 class="text-gray">No items in shopping cart</h4>
    </div>
  </div>
@endif
