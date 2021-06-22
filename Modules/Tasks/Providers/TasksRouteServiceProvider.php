<?php


namespace NOGMS\Tasks\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class TasksRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = '\NOGMS\Tasks\Http\Controllers';

    public function boot()
    {
        Route::namespace($this->namespace)
            ->middleware(['web'])
            ->group(modules_path('Tasks/Routes/web.php'));
    }
}
