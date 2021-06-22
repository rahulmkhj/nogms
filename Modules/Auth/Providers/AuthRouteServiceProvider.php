<?php


namespace NOGMS\Auth\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class AuthRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = '\NOGMS\Auth\Http\Controllers';

    public function boot()
    {
        Route::namespace($this->namespace)
            ->middleware(['web'])
            ->group(modules_path('Auth/Routes/web.php'));
    }
}
