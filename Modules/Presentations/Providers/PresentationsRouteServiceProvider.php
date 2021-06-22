<?php


namespace NOGMS\Presentations\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class PresentationsRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = '\NOGMS\Presentations\Http\Controllers';

    public function boot()
    {
        Route::namespace($this->namespace)
            ->middleware(['web'])
            ->group(modules_path('Presentations/Routes/web.php'));
    }
}
