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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


use App\Http\Controllers\QuestionController;

// Health check endpoint for deployment monitoring
Route::get('/health', 'WelcomeController@health')->name('health');

// Welcome page
Route::get('/', 'WelcomeController@welcome')->name('welcome');


Route::post('/sendManagerNotification/{managerid}/{doctorname}/{protocolname}', 'WelcomeController@sendManagerNotification')->name('sendManagerNotification');
Route::get('/sendManagerNotification/{managerid}/{doctorname}/{protocolname}', 'WelcomeController@sendManagerNotification')->name('sendManagerNotification');


// Temporarily disable localization to fix redirect issue
// Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function() {

    Auth::routes();

// });


Route::post('/sendPushNotification', 'WelcomeController@sendPushNotification')->name('sendPushNotification');
Route::get('/sendPushNotification', 'WelcomeController@sendPushNotification')->name('sendPushNotification');


Route::post('/sendSingleNotification', 'WelcomeController@sendSingleNotification')->name('sendSingleNotification');
Route::get('/sendSingleNotification', 'WelcomeController@sendSingleNotification')->name('sendSingleNotification');

Route::post('/sendSingleNotificationClaim', 'WelcomeController@sendSingleNotificationClaim')->name('sendSingleNotificationClaim');
Route::get('/sendSingleNotificationClaim', 'WelcomeController@sendSingleNotificationClaim')->name('sendSingleNotificationClaim');


Route::post('/sendOrderNotification', 'WelcomeController@sendOrderNotification')->name('sendOrderNotification');
Route::get('/sendOrderNotification', 'WelcomeController@sendOrderNotification')->name('sendOrderNotification');
