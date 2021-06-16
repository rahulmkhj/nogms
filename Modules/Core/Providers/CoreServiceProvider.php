<?php


namespace NOGMS\Core\Providers;



use Illuminate\Support\ServiceProvider;
use NOGMS\ModulesRegistry;

/**
 * Class CoreServiceProvider
 * @package NOGMS\Core\Providers
 *
 * This class is responsible for reading all module service providers registered with
 * various Module classes and register them with the application.
 */
class CoreServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $coreServiceProviders = [

    ];


    public function register()
    {
        foreach(
            array_merge( $this->coreServiceProviders, $this->getModuleServiceProviders() )
            as $serviceProvider
        )
        {
            $this->app->register( $serviceProvider );
        }
    }

    /**
     * @return array
     *
     * Reads all modules registered with the module registry & returns an
     * array of all the service providers registered with all modules.
     */
    public function getModuleServiceProviders(): array
    {
        $moduleServiceProviders = [];

        foreach (ModulesRegistry::getAll() as $module) {

            $moduleServiceProviders = array_merge( $moduleServiceProviders, $module::getServiceProviders());
        }

        return $moduleServiceProviders;
    }
}
