<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Info;
use View;
use App\SocialIcon;
use App\Service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');


        //share header and footer with all views        
        $headerInfo = Info::where('type', 'header')->first();
        $footerInfo = Info::where('type', 'footer')->first();
        $socialIcons = SocialIcon::all();
        $services = Service::all();


        View::share(['headerInfo' => $headerInfo, 'footerInfo' => $footerInfo, 'socialIcons' => $socialIcons, 'services' => $services]);

        // View::composer(['partials._header'], function ($view) {
        // $view->with('headerInfo', $headerInfo); // bind data to view
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
