<?php

namespace ContainerDD0MDyK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IuSQAtzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iuSQAtz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iuSQAtz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClassesController::delete' => ['privates', '.service_locator.GEPnQmV', 'get_ServiceLocator_GEPnQmVService', true],
            'App\\Controller\\ClassesController::edit' => ['privates', '.service_locator.GEPnQmV', 'get_ServiceLocator_GEPnQmVService', true],
            'App\\Controller\\ClassesController::index' => ['privates', '.service_locator.th3AHlh', 'get_ServiceLocator_Th3AHlhService', true],
            'App\\Controller\\ClassesController::new' => ['privates', '.service_locator.th3AHlh', 'get_ServiceLocator_Th3AHlhService', true],
            'App\\Controller\\ClassesController::show' => ['privates', '.service_locator.CQ79S7X', 'get_ServiceLocator_CQ79S7XService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.1lhwlKq', 'get_ServiceLocator_1lhwlKqService', true],
            'App\\Controller\\ListController::index' => ['privates', '.service_locator.1lhwlKq', 'get_ServiceLocator_1lhwlKqService', true],
            'App\\Controller\\RacesController::delete' => ['privates', '.service_locator.En51Kqp', 'get_ServiceLocator_En51KqpService', true],
            'App\\Controller\\RacesController::edit' => ['privates', '.service_locator.En51Kqp', 'get_ServiceLocator_En51KqpService', true],
            'App\\Controller\\RacesController::index' => ['privates', '.service_locator.5Y4zUsP', 'get_ServiceLocator_5Y4zUsPService', true],
            'App\\Controller\\RacesController::new' => ['privates', '.service_locator.5Y4zUsP', 'get_ServiceLocator_5Y4zUsPService', true],
            'App\\Controller\\RacesController::show' => ['privates', '.service_locator.En51Kqp', 'get_ServiceLocator_En51KqpService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\ClassesController:delete' => ['privates', '.service_locator.GEPnQmV', 'get_ServiceLocator_GEPnQmVService', true],
            'App\\Controller\\ClassesController:edit' => ['privates', '.service_locator.GEPnQmV', 'get_ServiceLocator_GEPnQmVService', true],
            'App\\Controller\\ClassesController:index' => ['privates', '.service_locator.th3AHlh', 'get_ServiceLocator_Th3AHlhService', true],
            'App\\Controller\\ClassesController:new' => ['privates', '.service_locator.th3AHlh', 'get_ServiceLocator_Th3AHlhService', true],
            'App\\Controller\\ClassesController:show' => ['privates', '.service_locator.CQ79S7X', 'get_ServiceLocator_CQ79S7XService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.1lhwlKq', 'get_ServiceLocator_1lhwlKqService', true],
            'App\\Controller\\ListController:index' => ['privates', '.service_locator.1lhwlKq', 'get_ServiceLocator_1lhwlKqService', true],
            'App\\Controller\\RacesController:delete' => ['privates', '.service_locator.En51Kqp', 'get_ServiceLocator_En51KqpService', true],
            'App\\Controller\\RacesController:edit' => ['privates', '.service_locator.En51Kqp', 'get_ServiceLocator_En51KqpService', true],
            'App\\Controller\\RacesController:index' => ['privates', '.service_locator.5Y4zUsP', 'get_ServiceLocator_5Y4zUsPService', true],
            'App\\Controller\\RacesController:new' => ['privates', '.service_locator.5Y4zUsP', 'get_ServiceLocator_5Y4zUsPService', true],
            'App\\Controller\\RacesController:show' => ['privates', '.service_locator.En51Kqp', 'get_ServiceLocator_En51KqpService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\ClassesController::delete' => '?',
            'App\\Controller\\ClassesController::edit' => '?',
            'App\\Controller\\ClassesController::index' => '?',
            'App\\Controller\\ClassesController::new' => '?',
            'App\\Controller\\ClassesController::show' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\ListController::index' => '?',
            'App\\Controller\\RacesController::delete' => '?',
            'App\\Controller\\RacesController::edit' => '?',
            'App\\Controller\\RacesController::index' => '?',
            'App\\Controller\\RacesController::new' => '?',
            'App\\Controller\\RacesController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ClassesController:delete' => '?',
            'App\\Controller\\ClassesController:edit' => '?',
            'App\\Controller\\ClassesController:index' => '?',
            'App\\Controller\\ClassesController:new' => '?',
            'App\\Controller\\ClassesController:show' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\ListController:index' => '?',
            'App\\Controller\\RacesController:delete' => '?',
            'App\\Controller\\RacesController:edit' => '?',
            'App\\Controller\\RacesController:index' => '?',
            'App\\Controller\\RacesController:new' => '?',
            'App\\Controller\\RacesController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
