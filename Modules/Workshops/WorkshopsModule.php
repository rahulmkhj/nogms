<?php


namespace NOGMS\Workshops;


use NOGMS\Base\BaseModule;
use NOGMS\Workshops\Providers\WorkshopsModuleServiceProvider;

class WorkshopsModule extends BaseModule
{
    protected static $serviceProviders = [
        WorkshopsModuleServiceProvider::class,
    ];
}
