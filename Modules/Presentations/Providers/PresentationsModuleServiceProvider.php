<?php


namespace NOGMS\Presentations\Providers;


use Illuminate\Support\ServiceProvider;

class PresentationsModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(modules_path('Presentations/Html/Views'), 'PresentationsViews');
    }
}
