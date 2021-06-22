<?php


namespace NOGMS\Volunteers;


use NOGMS\Base\BaseModule;
use NOGMS\Volunteers\Providers\VolunteersModuleServiceProvider;
use NOGMS\Volunteers\Providers\VolunteersRouteServiceProvider;

class VolunteersModule extends BaseModule
{
    protected static $serviceProviders = [
        VolunteersModuleServiceProvider::class,
        VolunteersRouteServiceProvider::class,
    ];
}
