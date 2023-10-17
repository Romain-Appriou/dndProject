<?php

namespace ContainerCwxHVAP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JoixzhuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.joixzhu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.joixzhu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dnd35Don' => ['privates', '.errored..service_locator.joixzhu.App\\Entity\\Dnd35Dons', NULL, 'Cannot autowire service ".service_locator.joixzhu": it references class "App\\Entity\\Dnd35Dons" but no such service exists.'],
        ], [
            'dnd35Don' => 'App\\Entity\\Dnd35Dons',
        ]);
    }
}
