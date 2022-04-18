<?php

namespace ContainerN80aQ50;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_CheckRememberMeConditions_AdminSecuredAreaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.check_remember_me_conditions.admin_secured_area' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CheckRememberMeConditionsListener.php';

        return $container->privates['security.listener.check_remember_me_conditions.admin_secured_area'] = new \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener(['always_remember_me' => false, 'remember_me_parameter' => '_remember_me'], ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
