<?php


namespace NOGMS\Events\Providers;



use Illuminate\Support\ServiceProvider;

class EventsModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(modules_path('Events/Html/Views'), 'EventsViews');
    }
}
