<?php
namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Set the language based on the session
        $locale = session('locale', 'en'); // Default to 'en' if no locale is set
        App::setLocale($locale);  // Set the app locale
        Blade::component('layouts.app', 'app-layout');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
