<?php


namespace NOGMS\Admin\Providers;


use Illuminate\Support\ServiceProvider;

class AdminModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(modules_path('Admin/Html/Views'), 'AdminViews');
    }
}
