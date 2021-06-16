<?php


namespace NOGMS\Base\Providers;


use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . "/../Html/Views", "BaseViews");
    }
}
