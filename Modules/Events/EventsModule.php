<?php


namespace NOGMS\Events;


use NOGMS\Base\BaseModule;
use NOGMS\Events\Providers\EventsModuleServiceProvider;

class EventsModule extends BaseModule
{
    protected static $serviceProviders = [
        EventsModuleServiceProvider::class,
    ];
}
