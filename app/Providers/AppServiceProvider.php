<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Auth\LoginController;
use Gate;

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
        Gate::define('admin',function($user){
            return $user->role == 'admin';
        });

        Gate::define('user',function($user){
            return $user->role == 'user';
        });

        // [LoginController::class,'authenticate']

        // View::share('key',([LoginController::class,'authenticate',compact('result')]));

       
    }
}
