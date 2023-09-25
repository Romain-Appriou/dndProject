<?php

namespace ContainerH5xhiFx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5Y4zUsPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5Y4zUsP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5Y4zUsP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'racesRepository' => ['privates', 'App\\Repository\\RacesRepository', 'getRacesRepositoryService', true],
        ], [
            'racesRepository' => 'App\\Repository\\RacesRepository',
        ]);
    }
}
