<?php

namespace App\Providers;

use App\Models\User;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Foundation\Auth\User;

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
        //
        Gate::define('admin', function (User $user) {
            return $user->is_Admin;
        });
    }
}