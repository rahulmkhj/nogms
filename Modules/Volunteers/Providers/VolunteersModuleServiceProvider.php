<?php


namespace NOGMS\Volunteers\Providers;


use Illuminate\Support\ServiceProvider;

class VolunteersModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(modules_path('Volunteers/Html/Views'), 'VolunteersViews');
    }
}
