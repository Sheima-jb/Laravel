<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // Add this import statement
use Illuminate\Support\Facades\URL;    // Add this import statement if you're using URL::forceScheme

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
        // Set a default string length for migrations to avoid the "specified key too long" error
        Schema::defaultStringLength(191);

        // Force HTTPS in production (optional, but common)
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
