<?php


namespace NOGMS\Tasks\Providers;


use Illuminate\Support\ServiceProvider;

class TasksModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(base_path('Modules/Auth/Html/Views'), 'TasksViews');
    }
}
