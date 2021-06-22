<?php


namespace NOGMS\Presentations;


use NOGMS\Base\BaseModule;
use NOGMS\Presentations\Providers\PresentationsModuleServiceProvider;
use NOGMS\Presentations\Providers\PresentationsRouteServiceProvider;

class PresentationsModule extends BaseModule
{
    protected static $serviceProviders = [
        PresentationsModuleServiceProvider::class,
        PresentationsRouteServiceProvider::class,
    ];
}
