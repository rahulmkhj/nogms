<?php


namespace NOGMS\Committees\Providers;


use Illuminate\Support\ServiceProvider;

class CommitteesModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(modules_path('Committees/Html/Views'), 'CommitteesViews');
    }
}
