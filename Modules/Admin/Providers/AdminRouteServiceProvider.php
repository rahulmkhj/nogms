<?php


namespace NOGMS\Admin\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class AdminRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = '\NOGMS\Admin\Http\Controllers';

    public function boot()
    {
        Route::namespace($this->namespace)
            ->middleware(['web'])
            ->group(modules_path('Admin/Routes/web.php'));
    }
}
