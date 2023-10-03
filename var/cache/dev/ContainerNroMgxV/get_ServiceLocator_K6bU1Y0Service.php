<?php

namespace ContainerNroMgxV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K6bU1Y0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K6bU1Y0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K6bU1Y0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dnd35Sort' => ['privates', '.errored..service_locator.K6bU1Y0.App\\Entity\\Dnd35Sorts', NULL, 'Cannot autowire service ".service_locator.K6bU1Y0": it references class "App\\Entity\\Dnd35Sorts" but no such service exists.'],
            'sortsRepository' => ['privates', 'App\\Repository\\SortsRepository', 'getSortsRepositoryService', true],
        ], [
            'dnd35Sort' => 'App\\Entity\\Dnd35Sorts',
            'sortsRepository' => 'App\\Repository\\SortsRepository',
        ]);
    }
}
