<?php


namespace NOGMS\Tasks\Providers;


use Illuminate\Support\ServiceProvider;

class TasksModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(modules_path('Tasks/Html/Views'), 'TasksViews');
    }
}
