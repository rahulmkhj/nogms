<?php


namespace NOGMS\Workshops\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class WorkshopsRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = '\NOGMS\Workshops\Http\Controllers';

    public function boot()
    {
        Route::namespace($this->namespace)
            ->middleware(['web'])
            ->group(modules_path('Workshops/Routes/web.php'));
    }
}
