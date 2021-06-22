<?php


namespace NOGMS\Committees\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class CommitteesRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = '\NOGMS\Committees\Http\Controllers';

    public function boot()
    {
        Route::namespace($this->namespace)
            ->middleware(['web'])
            ->group(modules_path('Committees/Routes/web.php'));
    }
}
