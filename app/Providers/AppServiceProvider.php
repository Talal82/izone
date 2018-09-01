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


        //share header/footer/social-icons and services with all views        
        $headerInfo = Info::where('type', 'header')->first();
        $footerInfo = Info::where('type', 'footer')->first();
        $socialIcons = SocialIcon::all();
        $services = Service::all();
        View::share(['headerInfo' => $headerInfo, 'footerInfo' => $footerInfo, 'socialIcons' => $socialIcons, 'services' => $services]);

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
