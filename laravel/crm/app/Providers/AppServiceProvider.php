<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Customer;
use App\Models\Purchase;
use ValidationHelpers;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('ValidationHelpers', function ($app) {
            return new ValidationHelpers();
        });
    }
    
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        
    }
}

