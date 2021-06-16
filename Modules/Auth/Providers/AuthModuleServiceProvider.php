<?php


namespace NOGMS\Auth\Providers;


use Carbon\Laravel\ServiceProvider;

class AuthModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(base_path('Modules/Auth/Html/Views'), 'AuthViews');
    }
}
