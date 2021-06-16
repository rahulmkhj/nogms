<?php


namespace NOGMS\Auth;


use NOGMS\Auth\Providers\AuthModuleServiceProvider;
use NOGMS\Auth\Providers\AuthRouteServiceProvider;
use NOGMS\Base\BaseModule;

class AuthModule extends BaseModule
{
    protected static $serviceProviders = [
        AuthRouteServiceProvider::class,
        AuthModuleServiceProvider::class,
    ];
}
