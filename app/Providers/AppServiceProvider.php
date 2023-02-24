<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        /* Component aliases => Add On*/
        Blade::component('components.add_on.content_header', 'contentHeader');
        Blade::component('components.add_on.main_content', 'mainContent');
        Blade::component('components.add_on.footer', 'footer');
        
        /* Component aliases => Layout*/
        Blade::component('components.layout.index', 'masterLayout');
        Blade::component('components.layout.login', 'masterLogin');
    }
}
