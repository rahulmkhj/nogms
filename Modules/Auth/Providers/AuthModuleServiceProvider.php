<?php


namespace NOGMS\Auth\Providers;


use Carbon\Laravel\ServiceProvider;

class AuthModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(modules_path('Auth/Html/Views'), 'AuthViews');
    }
}
