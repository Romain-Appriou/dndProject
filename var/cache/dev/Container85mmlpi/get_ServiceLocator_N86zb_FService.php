<?php

namespace Container85mmlpi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N86zb_FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.N86zb.f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.N86zb.f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dnd35Race' => ['privates', '.errored..service_locator.N86zb.f.App\\Entity\\Dnd35Races', NULL, 'Cannot autowire service ".service_locator.N86zb.f": it references class "App\\Entity\\Dnd35Races" but no such service exists.'],
        ], [
            'dnd35Race' => 'App\\Entity\\Dnd35Races',
        ]);
    }
}
