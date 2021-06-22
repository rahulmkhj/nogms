<?php


namespace NOGMS\Presentations;


use NOGMS\Base\BaseModule;
use NOGMS\Presentations\Providers\PresentationsModuleServiceProvider;

class PresentationsModule extends BaseModule
{
    protected static $serviceProviders = [
        PresentationsModuleServiceProvider::class,
    ];
}
