<?php

namespace App\Providers;

use App\BlogCategory;
use App\ContactUs;
use App\HomeAbout ;
use App\AboutPage;
use App\Restaurant;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        // $this->app->bind('path.public', function() {
        //     return realpath(base_path().'/../public_html/ehanative');
        // });
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $firstColor  = 'white';  //body background color
        // $secondColor = 'black'; //all colors
        // $thirdColor  = 'red'; //hover colors

        
        

        session()->put('locale', 'ar');

        app()->setLocale(session()->get('locale'));
    }
}
