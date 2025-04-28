<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share variables with all views
        View::composer('partials.navbar', function ($view) {
            $view->with([
                'activePage' => request()->segment(1) ?: 'home',
                'lang' => session('language', 'en')
            ]);
        });
    }
}
