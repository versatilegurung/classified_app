<?php

namespace App\Providers;

use App\Models\Ad;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdsServiceProvider extends ServiceProvider
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
        // Retrieve ads and share them with all views
        $ads = Ad::where('published', true)->get();
        View::share('ads', $ads);
    }
}
