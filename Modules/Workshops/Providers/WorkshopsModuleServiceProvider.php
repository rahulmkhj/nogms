<?php


namespace NOGMS\Workshops\Providers;


use Illuminate\Support\ServiceProvider;

class WorkshopsModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(modules_path('Workshops/Html/Views'), 'WorkshopsViews');
    }
}
