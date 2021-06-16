<?php


namespace NOGMS\Base\Traits;


trait ModuleServiceProvidersTrait
{
    protected static $serviceProviders;

    public static function getServiceProviders()
    {
        return static::$serviceProviders;
    }
}
