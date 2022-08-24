<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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

        Paginator::useBootstrap();
        Gate::define('member', function (User $user) {
            if ($user->role_id == 1) {
                return true;
            } else {
                return false;
            }
        });
        Gate::define('trainer', function (User $user) {
            if ($user->role_id == 2) {
                return true;
            } else {
                return false;
            }
        });
        Gate::define('pengelola', function (User $user) {
            if ($user->role_id == 3) {
                return true;
            } else {
                return false;
            }
        });
        Gate::define('admin', function (User $user) {
            if ($user->role_id == 4) {
                return true;
            } else {
                return false;
            }
        });
    }
}
