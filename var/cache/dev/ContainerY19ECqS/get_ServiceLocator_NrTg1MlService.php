<?php

namespace ContainerY19ECqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NrTg1MlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nrTg1Ml' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nrTg1Ml'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sortsRepository' => ['privates', 'App\\Repository\\SortsRepository', 'getSortsRepositoryService', true],
        ], [
            'sortsRepository' => 'App\\Repository\\SortsRepository',
        ]);
    }
}