<?php

namespace ContainerDD0MDyK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClassesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ClassesController' shared autowired service.
     *
     * @return \App\Controller\ClassesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ClassesController.php';

        $container->services['App\\Controller\\ClassesController'] = $instance = new \App\Controller\ClassesController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ClassesController', $container));

        return $instance;
    }
}
