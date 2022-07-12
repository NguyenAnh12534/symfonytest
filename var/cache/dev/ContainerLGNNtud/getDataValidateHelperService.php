<?php

namespace ContainerLGNNtud;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataValidateHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Helper\DataValidateHelper' shared autowired service.
     *
     * @return \App\Helper\DataValidateHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'DataValidateHelper.php';

        return $container->services['App\\Helper\\DataValidateHelper'] = new \App\Helper\DataValidateHelper();
    }
}