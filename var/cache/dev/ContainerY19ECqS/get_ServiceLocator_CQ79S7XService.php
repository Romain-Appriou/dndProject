<?php

namespace ContainerY19ECqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CQ79S7XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CQ79S7X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CQ79S7X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'class' => ['privates', '.errored..service_locator.CQ79S7X.App\\Entity\\Classes', NULL, 'Cannot autowire service ".service_locator.CQ79S7X": it references class "App\\Entity\\Classes" but no such service exists.'],
        ], [
            'class' => 'App\\Entity\\Classes',
        ]);
    }
}
