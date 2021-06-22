<?php


namespace NOGMS\Admin;


use NOGMS\Admin\Providers\AdminModuleServiceProvider;
use NOGMS\Base\BaseModule;

class AdminModule extends BaseModule
{
    protected static $serviceProviders = [
        AdminModuleServiceProvider::class,
    ];
}
