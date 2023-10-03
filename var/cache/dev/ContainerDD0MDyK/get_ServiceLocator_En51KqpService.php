<?php

namespace ContainerDD0MDyK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_En51KqpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.En51Kqp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.En51Kqp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dnd35Race' => ['privates', '.errored..service_locator.En51Kqp.App\\Entity\\Dnd35Races', NULL, 'Cannot autowire service ".service_locator.En51Kqp": it references class "App\\Entity\\Dnd35Races" but no such service exists.'],
            'racesRepository' => ['privates', 'App\\Repository\\RacesRepository', 'getRacesRepositoryService', true],
        ], [
            'dnd35Race' => 'App\\Entity\\Dnd35Races',
            'racesRepository' => 'App\\Repository\\RacesRepository',
        ]);
    }
}
