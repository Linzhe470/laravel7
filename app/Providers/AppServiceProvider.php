<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //讓HEROKU可以顯示內部連結資料使asseet從http變成https
        if (env('HTTPS_CHECK')){
            URL::forceScheme('https');
        }
    }
}
