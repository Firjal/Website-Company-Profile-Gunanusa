<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('*', function ($view) {
        if (Auth::guard('admin')->check()) {
            $view->with('adminUser', Auth::guard('admin')->user());
        }
        });
    }
}
