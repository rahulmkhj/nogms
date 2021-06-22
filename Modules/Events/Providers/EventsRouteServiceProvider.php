<?php


namespace NOGMS\Events\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class EventsRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = '\NOGMS\Events\Http\Controllers';

    public function boot()
    {
        Route::namespace($this->namespace)
            ->middleware(['web'])
            ->group(modules_path('Events/Routes/web.php'));
    }
}
