<?php


namespace NOGMS\Committees;


use NOGMS\Base\BaseModule;
use NOGMS\Committees\Providers\CommitteesModuleServiceProvider;

class CommitteesModule extends BaseModule
{
    protected static $serviceProviders = [
        CommitteesModuleServiceProvider::class,
    ];
}
