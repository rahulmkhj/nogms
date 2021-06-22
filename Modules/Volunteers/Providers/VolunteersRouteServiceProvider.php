<?php


namespace NOGMS\Volunteers\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class VolunteersRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = '\NOGMS\Volunteers\Http\Controllers';

    public function boot()
    {
        Route::namespace($this->namespace)
            ->middleware(['web'])
            ->group(modules_path('Volunteers/Routes/web.php'));
    }
}
