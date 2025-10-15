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


Route::namespace('BackEnd')->prefix('admin')->middleware('admin')->group(function() {

    Route::get('/dashboard', 'DashboardController@index')->name('admin.home');

    Route::resource('/about', 'AboutController');

    Route::get('/getformcontact', 'DashboardController@getformcontact')->name('getformcontact');
    Route::get('/getcontact/{id}', 'DashboardController@getcontact')->name('getcontact');
    Route::get('/patientindex', 'DashboardController@patientindex')->name('patientindex');
    Route::get('/patientdetails/{id}/{case}', 'DashboardController@patientdetails')->name('patientdetails');
    
    
    Route::get('/notificationsend', 'DashboardController@notificationsend')->name('notificationsend');
    Route::post('/sendPushNotification', 'DashboardController@sendPushNotification')->name('sendPushNotification');
    
    
    
    
    Route::resource('/subject', 'CommunitySubjectController');
    Route::post('/subjectRecover/{id}', 'CommunitySubjectController@recover')->name('subjectRecover');
    

    Route::resource('/newsletter', 'NewsletterController');
    Route::get('/newsletterRecover/{id}', 'NewsletterController@recover')->name('newsletterRecover');
    Route::get('/newsletterDelete/{id}', 'NewsletterController@destroy')->name('newsletterDelete');
    Route::post('/newsletterRecover/{id}', 'NewsletterController@recover')->name('newsletterRecover');
    Route::post('/newsletterDelete/{id}', 'NewsletterController@destroy')->name('newsletterDelete');

    Route::resource('/homeAbout', 'HomeAboutController');
    Route::resource('/homeSlider', 'HomeSliderController');
    Route::resource('/clients', 'ClientsController');
    Route::post('/clientsRecover/{id}', 'ClientsController@recover')->name('clientsRecover');
    
    Route::resource('/homeCounter', 'HomeCounterController');
    Route::post('/homeCounterRecover/{id}', 'HomeCounterController@recover')->name('homeCounterRecover');

    Route::resource('/homeInvest', 'HomeInvestController');
    Route::resource('/homeService', 'HomeServiceController');
    Route::post('/homeServiceRecover/{id}', 'HomeServiceController@recover')->name('homeServiceRecover');

    Route::resource('/blogCategory', 'BlogCategoryController');
    Route::post('/blogCategoryRecover/{id}', 'BlogCategoryController@recover')->name('blogCategoryRecover');
    
    
    Route::resource('/article', 'ArticleController');
    Route::post('/articleRecover/{id}', 'ArticleController@recover')->name('articleRecover');
    
    Route::resource('/subject', 'CommunitySubjectController');
    Route::post('/subjectRecover/{id}', 'CommunitySubjectController@recover')->name('subjectRecover');
    
    


    Route::resource('/protocolscope', 'ProtocolScopeController');
    Route::post('/protocolscopeRecover/{id}', 'ProtocolScopeController@recover')->name('protocolscopeRecover');
    Route::post('/protocolscopeDelete/{id}', 'ProtocolScopeController@destroy')->name('protocolscopeDelete');
    
    Route::get('/protocolquestions/{id}', 'ProtocolScopeController@protocolquestions')->name('protocolquestions');
    Route::get('/createprotocolquestion/{id}', 'ProtocolScopeController@createprotocolquestion')->name('createprotocolquestion');
    Route::post('/storequestion', 'ProtocolScopeController@storequestion')->name('storequestion');
    Route::get('/editprotocolquestion/{id}', 'ProtocolScopeController@editprotocolquestion')->name('editprotocolquestion');
    Route::post('/updateprotocolquestion/{id}', 'ProtocolScopeController@updateprotocolquestion')->name('updateprotocolquestion');



    Route::get('/protocoldigram/{id}', 'ProtocolScopeController@protocoldigram')->name('protocoldigram');
    Route::get('/protocolcreatedigram/{id}', 'ProtocolScopeController@protocolcreatedigram')->name('protocolcreatedigram');
    Route::post('/protocolstoredigram', 'ProtocolScopeController@protocolstoredigram')->name('protocolstoredigram');
    Route::get('/protocoleditdigram/{id}', 'ProtocolScopeController@protocoleditdigram')->name('protocoleditdigram');
    Route::post('/protocolupdatedigram/{id}', 'ProtocolScopeController@protocolupdatedigram')->name('protocolupdatedigram');

    
    
    Route::get('/protocolchoices/{id}', 'ProtocolScopeController@protocolchoices')->name('protocolchoices');
    Route::get('/editprotocolchoice/{id}', 'ProtocolScopeController@editprotocolchoice')->name('editprotocolchoice');
    Route::post('/updateprotocolchoice/{id}', 'ProtocolScopeController@updateprotocolchoice')->name('updateprotocolchoice');
    

    
    Route::resource('/blogSubCategory', 'BlogSubCategoryController');
    Route::post('/blogSubCategoryRecover/{id}', 'BlogSubCategoryController@recover')->name('blogSubCategoryRecover');
    Route::post('/blogSubCategoryDelete/{id}', 'BlogSubCategoryController@destroy')->name('blogSubCategoryDelete');

    Route::resource('/blogs', 'BlogController');
    Route::post('/blogsRecover/{id}', 'BlogController@recover')->name('blogsRecover');


    Route::resource('/admins', 'AdminsController');
    Route::post('/adminsRecover/{id}', 'AdminsController@recover')->name('adminsRecover');
    

    Route::resource('/branches', 'BranchesController');
    Route::post('/branchesRecover/{id}', 'BranchesController@recover')->name('branchesRecover');
    Route::resource('/categories', 'CategoriesController');
    Route::post('/categoryRecover/{id}', 'CategoriesController@recover')->name('categoryRecover');
    Route::resource('/contact_us', 'ContactUsController');
    Route::resource('/coupons', 'CouponsController');
    Route::post('/couponRecover/{id}', 'CouponsController@recover')->name('couponRecover');
    Route::resource('/feedback-contact', 'FeedbackContactController');
    Route::resource('/orders', 'OrdersController');
    Route::post('/ordersUpdateStatus/{id}', 'OrdersController@ordersUpdateStatus')->name('ordersUpdateStatus');
    Route::resource('/products', 'ProductsController');
    Route::post('/productRecover/{id}', 'ProductsController@recover')->name('productRecover');
    Route::resource('/hotDeal', 'HotDealController');
    Route::post('/hotDealRecover/{id}', 'HotDealController@recover')->name('hotDealRecover');

    Route::resource('/reservation', 'ReservationController');
    Route::post('/reservationsUpdateStatus/{id}', 'ReservationController@reservationsUpdateStatus')->name('reservationsUpdateStatus');
    
    Route::resource('/Restaurants', 'RestaurantController');
    Route::resource('/orderSettings', 'SettingsController');
    Route::resource('/orderSettings', 'SettingsController');
    
    Route::get('/productChoices/{id}', 'ProductsController@productChoicesIndex')->name('productChoices');
    Route::get('/productChoicesCreation/{id}', 'ProductsController@productChoicesCreate')->name('productChoicesCreation');
    Route::post('/productChoicesStore', 'ProductsController@productChoicesStore')->name('productChoicesStore');
    Route::get('/productChoicesEdit/{id}', 'ProductsController@productChoicesEdit')->name('productChoicesEdit');
    Route::post('/productChoicesUpdate/{id}', 'ProductsController@productChoicesUpdate')->name('productChoicesUpdate');
    Route::post('/productChoicesDelete/{id}', 'ProductsController@productChoicesDelete')->name('productChoicesDelete');
    Route::post('/productChoicesEnable/{id}', 'ProductsController@productChoicesEnable')->name('productChoicesEnable');
    
    Route::get('/restaurantAdminIndex', 'DashboardController@restaurantAdminIndex')->name('admin.restaurantAdminIndex');
    Route::post('/restaurantAdminUpdateStatus/{id}', 'DashboardController@restaurantAdminUpdateStatus')->name('restaurantAdminUpdateStatus');
    Route::post('/restaurantAdminShow/{id}', 'DashboardController@restaurantAdminShow')->name('restaurantAdminShow');
    Route::get('/restaurantAdminShow/{id}', 'DashboardController@restaurantAdminShow')->name('restaurantAdminShow');
});


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function() {
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

});


Route::post('/sendPushNotification', 'WelcomeController@sendPushNotification')->name('sendPushNotification');
Route::get('/sendPushNotification', 'WelcomeController@sendPushNotification')->name('sendPushNotification');


Route::post('/sendSingleNotification', 'WelcomeController@sendSingleNotification')->name('sendSingleNotification');
Route::get('/sendSingleNotification', 'WelcomeController@sendSingleNotification')->name('sendSingleNotification');

Route::post('/sendSingleNotificationClaim', 'WelcomeController@sendSingleNotificationClaim')->name('sendSingleNotificationClaim');
Route::get('/sendSingleNotificationClaim', 'WelcomeController@sendSingleNotificationClaim')->name('sendSingleNotificationClaim');


Route::post('/sendOrderNotification', 'WelcomeController@sendOrderNotification')->name('sendOrderNotification');
Route::get('/sendOrderNotification', 'WelcomeController@sendOrderNotification')->name('sendOrderNotification');
