<?php

<<<<<<< HEAD:var/cache/dev/ContainerFFfIZfl/getConsole_Command_YamlLintService.php
namespace ContainerFFfIZfl;

=======
namespace ContainerY1G2mUW;
>>>>>>> 9b03bdf0df8650d60f8b2bd0d2214076809a92cf:var/cache/dev/ContainerY1G2mUW/getConsole_Command_YamlLintService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_YamlLintService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'yaml'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LintCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'YamlLintCommand.php';

        $container->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');
        $instance->setDescription('Lint a YAML file and outputs encountered errors');

        return $instance;
    }
}
