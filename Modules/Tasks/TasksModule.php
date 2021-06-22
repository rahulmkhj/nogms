<?php


namespace NOGMS\Tasks;


use NOGMS\Base\BaseModule;
use NOGMS\Tasks\Providers\TasksModuleServiceProvider;

class TasksModule extends BaseModule
{
    protected static $serviceProviders = [
        TasksModuleServiceProvider::class,
    ];
}
