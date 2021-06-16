<?php


namespace NOGMS;




class ModulesRegistry
{
    protected static $modules = [

    ];

    public static function getAll()
    {
        return static::$modules;
    }
}
