<?php

namespace App\Providers;

use App\Models\Footer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FooterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
            // Share the footer data with all views
            View::composer('*', function ($view) {
                $footer = Footer::find(1); // Fetch the footer data
                $view->with('footer', $footer);
            });
    }
}
