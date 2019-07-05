<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider;

use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends AuthServiceProvider
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

        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            if($user->role->name == 'admin'){
                return true;
            }
            return false;
        });

        Gate::define('client', function ($user) {
            if($user->role->name == 'client'){
                return true;
            }
            return false;
        });

        Gate::define('subscriber', function ($user) {
            if($user->role->name == 'subscriber'){
                return true;
            }
            return false;
        });


    }
}
