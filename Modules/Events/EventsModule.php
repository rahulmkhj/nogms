<?php


namespace NOGMS\Events;


use NOGMS\Base\BaseModule;
use NOGMS\Events\Providers\EventsModuleServiceProvider;
use NOGMS\Events\Providers\EventsRouteServiceProvider;

class EventsModule extends BaseModule
{
    protected static $serviceProviders = [
        EventsModuleServiceProvider::class,
        EventsRouteServiceProvider::class,
    ];
}
