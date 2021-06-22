<?php


namespace NOGMS\Workshops;


use NOGMS\Base\BaseModule;
use NOGMS\Workshops\Providers\WorkshopsModuleServiceProvider;
use NOGMS\Workshops\Providers\WorkshopsRouteServiceProvider;

class WorkshopsModule extends BaseModule
{
    protected static $serviceProviders = [
        WorkshopsModuleServiceProvider::class,
        WorkshopsRouteServiceProvider::class,
    ];
}
