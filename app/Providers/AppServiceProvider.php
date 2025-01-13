<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Tadilat;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Admin') ? true : null;
        });

        $setting = Setting::where('id', 1)->first();
        View::share('setting', $setting);





    }
}
