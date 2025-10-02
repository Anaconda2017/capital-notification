<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('BackEnd')->prefix('admin')->middleware('admin')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.home');
    Route::resource('/admins', 'AdminsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/brands', 'BrandsController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/products', 'ProductsController');
    Route::get('/products/deleteProductImages/{id}', 'ProductsController@deleteProductImages')->name('deleteProductImages');
    Route::delete('/products/recover/{id}', 'ProductsController@recover')->name('products.recover');
    Route::get('/orders/{id}/{status}', 'OrdersController@updateStatus')->name('ordersUpdateStatus');

    Route::resource('/orders', 'OrdersController');
    Route::resource('/offers', 'OffersController');
    Route::resource('/branches', 'BranchesController');
    Route::resource('/settings', 'SettingsController');
    Route::resource('/coupons', 'CouponsController');
    Route::resource('/locations', 'LocationsController');
    Route::resource('/clients', 'ClientsController');
    Route::resource('/contact_us', 'ContactUsController');
    Route::resource('/banner_images', 'BannerImagesController');
    Route::resource('/main', 'MainController');
    Route::resource('/sliders', 'SlidersController');
    Route::resource('/gallery', 'GalleryController');

    Route::resource('/about_page' , 'AboutPageController');

    Route::resource('/home_page' , 'HomePageController');

    Route::resource('/product-image', 'ProductImageController');
    Route::get('/product-image/create/{id}', 'ProductImageController@create')->name('productImageCreate');

    Route::resource('/product-choices', 'ProductChoiceController');
    Route::get('/product-choices/create/{id}', 'ProductChoiceController@create')->name('productChoiceCreate');

});

view()->composer('*', function ($view) {
    if(auth()->user()) {
        if(auth()->user()->unConfirmedOrder() != NULL) {
            $order = auth()->user()->unConfirmedOrder();
            $subTotal = 0;
            $total = 0;
            $promoInNumber = NULL;
            foreach($order->order_details as $orderDetail) {
                $subTotal += $orderDetail->quantity * $orderDetail->price;
            }
            if($order->promo_code_id != NULL) {
                $promo = App\PromoCode::find($order->promo_code_id);
                $promoInNumber = $subTotal * ( $promo->percentage / 100 );
                $total = $subTotal - $promoInNumber;
            } else {
                $total = $subTotal;
            }

            $view->with('userOrder', $order);
            $view->with('userOrderSubTotal', $subTotal);
            $view->with('userOrderPromoInNumber', $promoInNumber);
            $view->with('userOrderTotal', $total);

        }
    }
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function() {
    Route::get('/', 'WelcomeController@welcome')->name('welcome');
    Route::get('/shop', 'WelcomeController@shop')->name('shop');
    Route::get('/branches', 'WelcomeController@branches')->name('branches');
    
    Route::post('/newOrderreturn' , 'WelcomeController@newOrderreturn')->name('newOrderreturn');
    
    Route::get('/products/{product}', 'WelcomeController@productDetails')->name('productDetails');
    Route::get('/cart', 'CartController@index')->name('cart');
    Route::post('/add-to-cart', 'CartController@addToCart')->name('add-to-cart');
    Route::post('/update-cart', 'CartController@updateCart')->name('update-cart');
    Route::get('/delete-from-cart/{id}', 'CartController@removeFromCart')->name('delete-from-cart');
    Route::post('/apply-coupon', 'CartController@applyCoupon')->name('apply-coupon');
    Route::get('/shipping-address', 'ShippingAddressController@index')->name('shipping-address');
    Route::post('/add-new-address', 'ShippingAddressController@addNewAddress')->name('add-new-address');
    Route::post('/confirm-shipping-address', 'ShippingAddressController@confirmShippingAddress')->name('confirm-shipping-address');
    Route::get('/checkout', 'CheckoutController@index')->name('checkout');
    Route::post('/confirm-checkout', 'CheckoutController@confirmCheckout')->name('confirm-checkout');

    Route::get('/about-us' , 'WelcomeController@aboutUs')->name('about-us');

    Route::get('/product-details' , 'WelcomeController@productDetails')->name('product-details');
    Route::post('/product-details' , 'WelcomeController@productDetails')->name('product-details');

    Route::get('/cart-new' , 'WelcomeController@cartNew')->name('cart-new');


    Route::get('/contact-us' , 'WelcomeController@contactUs')->name('contact-us');

    Route::get('/track-your-order', 'WelcomeController@trackYourOrder')->name('track-your-order');


    Route::get('/previous-orders', 'WelcomeController@previousOrder')->name('previous-orders');

    // Route::get('/shipping-address', 'WelcomeController@shippingAddress')->name('shipping-address');

    Route::post('/send-message' , 'WelcomeController@sendMessage')->name('send-message');

    Route::get('/contact-sucess' , 'WelcomeController@contactsucess')->name('contact-sucess');
    Route::get('/contact-sucess' , 'WelcomeController@contactsucess')->name('contact-sucess');


    Route::post('/send-review' , 'WelcomeController@sendProductReview')->name('send-review');

    Route::get('/product-success' , 'WelcomeController@productsuccess')->name('product-success');


    Route::get('/profile', 'ProfileController@profile')->name('profile');
    Route::get('/update-profile', 'ProfileController@updateProfile')->name('update-profile');
    Route::post('/update-profile', 'ProfileController@updateProfile')->name('update-profile');
    Route::get('/update-password', 'ProfileController@updatePassword')->name('update-password');
    Route::post('/update-password', 'ProfileController@updatePassword')->name('update-password');
    Route::post('/updateAddress' , 'ProfileController@updateAddress')->name('updateAddress');

    Route::post('/deleteAddress' , 'ProfileController@deleteAddress')->name('deleteAddress');

    Auth::routes();

    Route::get('/{brand}', 'WelcomeController@brands')->name('brands');
    Route::get('/{brand}/{category}', 'WelcomeController@categories')->name('categories');
});
