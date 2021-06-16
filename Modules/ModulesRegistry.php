<?php


namespace NOGMS;




use NOGMS\Admin\AdminModule;
use NOGMS\Auth\AuthModule;
use NOGMS\Committees\CommitteesModule;
use NOGMS\Events\EventsModule;
use NOGMS\Presentations\PresentationsModule;
use NOGMS\Tasks\TasksModule;
use NOGMS\Volunteers\VolunteersModule;
use NOGMS\Workshops\WorkshopsModule;

class ModulesRegistry
{
    protected static $modules = [
        AdminModule::class,
        AuthModule::class,
        CommitteesModule::class,
        TasksModule::class,
        EventsModule::class,
        PresentationsModule::class,
        VolunteersModule::class,
        WorkshopsModule::class,
    ];

    public static function getAll()
    {
        return static::$modules;
    }
}
