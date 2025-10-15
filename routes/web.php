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


Route::post('/sendManagerNotification/{managerid}/{doctorname}/{protocolname}', 'WelcomeController@sendManagerNotification')->name('sendManagerNotification');
Route::get('/sendManagerNotification/{managerid}/{doctorname}/{protocolname}', 'WelcomeController@sendManagerNotification')->name('sendManagerNotification');
Route::get('/questions/first', [QuestionController::class, 'showFirstQuestion'])->name('questions.first');
Route::get('/questions/next/{choiceId}', [QuestionController::class, 'getNextQuestion'])->name('questions.next');




// Temporarily disable localization to fix redirect issue
// Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function() {
    Route::get('/', 'WelcomeController@welcome')->name('welcome');
   
   
    Route::get('/privacy-policy', 'WelcomeController@privacyPolicy')->name('privacy-policy');
   
    Route::get('/about-us' , 'WelcomeController@aboutUs')->name('about-us');
    Route::get('/protocols/{id}' , 'WelcomeController@protocols')->name('protocols');
    Route::get('/newsletter' , 'WelcomeController@newsletter')->name('newsletter');
    Route::post('/protocolsearch' , 'WelcomeController@protocolsearch')->name('protocolsearch');
    
    
    
    Route::get('/services' , 'WelcomeController@services')->name('services');
    Route::get('/allblogs' , 'WelcomeController@allblogs')->name('allblogs');
    Route::get('/blogdetail/{slug}' , 'WelcomeController@blogdetail')->name('blogdetail');
    Route::get('/subcategory/{slug}' , 'WelcomeController@subcategory')->name('subcategory');
    Route::get('/subcategory-blog/{slug}' , 'WelcomeController@subcategoryBlog')->name('subcategory-blog');


    Route::get('/contact-us' , 'WelcomeController@contactUs')->name('contact-us');
    Route::post('/sendMessage' , 'WelcomeController@sendMessage')->name('sendMessage');
    
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
