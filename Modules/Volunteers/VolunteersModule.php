<?php


namespace NOGMS\Volunteers;


use NOGMS\Base\BaseModule;
use NOGMS\Volunteers\Providers\VolunteersModuleServiceProvider;

class VolunteersModule extends BaseModule
{
    protected static $serviceProviders = [
        VolunteersModuleServiceProvider::class,
    ];
}
