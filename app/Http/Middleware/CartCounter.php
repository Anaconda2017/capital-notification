<?php

namespace App\Http\Middleware;

use App\Main;
use App\Brand;
use App\Branch;
use App\Slider;
use App\Product;
use App\Order;
use App\OrderDetail;
use App\Gallery;
use App\Contact;
use App\Category;
use App\PromoCode;
use App\AboutPage;
use App\ProductImage;
use App\ProductChoice;
use App\ContactUs;
use App\HomePage;
use App\User;
use App\Newsletter;
use App\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Session;

class CartCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $userOrder = auth()->user()->unConfirmedOrder();
        $counter = $userOrder->order_details()->count();

        return $next($counter);
    }
}
