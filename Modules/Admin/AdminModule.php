<?php


namespace NOGMS\Admin;


use NOGMS\Admin\Providers\AdminModuleServiceProvider;
use NOGMS\Admin\Providers\AdminRouteServiceProvider;
use NOGMS\Base\BaseModule;

class AdminModule extends BaseModule
{
    protected static $serviceProviders = [
        AdminModuleServiceProvider::class,
        AdminRouteServiceProvider::class,
    ];
}
