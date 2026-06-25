<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Schema;

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
         try {
        if (Schema::hasTable('company_profiles')) {
            View::share('profile', CompanyProfile::first());
        }
    } catch (\Throwable $e) {
        // biarkan aman, jangan bikin 500
    }
       
    }
}
