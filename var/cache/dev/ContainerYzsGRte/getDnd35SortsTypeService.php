<?php

namespace ContainerYzsGRte;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDnd35SortsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Dnd35SortsType' shared autowired service.
     *
     * @return \App\Form\Dnd35SortsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Dnd35SortsType.php';

        return $container->privates['App\\Form\\Dnd35SortsType'] = new \App\Form\Dnd35SortsType();
    }
}