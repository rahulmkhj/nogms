<?php


namespace NOGMS\Tasks;


use NOGMS\Base\BaseModule;
use NOGMS\Tasks\Providers\TasksModuleServiceProvider;
use NOGMS\Tasks\Providers\TasksRouteServiceProvider;

class TasksModule extends BaseModule
{
    protected static $serviceProviders = [
        TasksModuleServiceProvider::class,
        TasksRouteServiceProvider::class,
    ];
}
