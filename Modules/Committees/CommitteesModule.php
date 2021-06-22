<?php


namespace NOGMS\Committees;


use NOGMS\Base\BaseModule;
use NOGMS\Committees\Providers\CommitteesModuleServiceProvider;
use NOGMS\Committees\Providers\CommitteesRouteServiceProvider;

class CommitteesModule extends BaseModule
{
    protected static $serviceProviders = [
        CommitteesModuleServiceProvider::class,
        CommitteesRouteServiceProvider::class,
    ];
}
