<?php

namespace ContainerXPErx9m;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PdirUzdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pdirUzd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pdirUzd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Backend\\Login\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Backend\\Ticket\\TicketController::backendindex' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Controller\\Backend\\Ticket\\TicketController::delete' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Controller\\Backend\\Ticket\\TicketController::edit' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Controller\\Frontend\\FrontendController::index' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Controller\\Frontend\\Login\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Frontend\\Register\\RegistrationController::register' => ['privates', '.service_locator.FKYJyvX', 'get_ServiceLocator_FKYJyvXService', true],
            'App\\Controller\\Frontend\\Register\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'App\\Controller\\Frontend\\ticket\\TicketFrontendController::userindex' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Backend\\Login\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Backend\\Ticket\\TicketController:backendindex' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Controller\\Backend\\Ticket\\TicketController:delete' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Controller\\Backend\\Ticket\\TicketController:edit' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Controller\\Frontend\\FrontendController:index' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'App\\Controller\\Frontend\\Login\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Frontend\\Register\\RegistrationController:register' => ['privates', '.service_locator.FKYJyvX', 'get_ServiceLocator_FKYJyvXService', true],
            'App\\Controller\\Frontend\\Register\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'App\\Controller\\Frontend\\ticket\\TicketFrontendController:userindex' => ['privates', '.service_locator.1.Dl96P', 'get_ServiceLocator_1_Dl96PService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Backend\\Login\\SecurityController::login' => '?',
            'App\\Controller\\Backend\\Ticket\\TicketController::backendindex' => '?',
            'App\\Controller\\Backend\\Ticket\\TicketController::delete' => '?',
            'App\\Controller\\Backend\\Ticket\\TicketController::edit' => '?',
            'App\\Controller\\Frontend\\FrontendController::index' => '?',
            'App\\Controller\\Frontend\\Login\\SecurityController::login' => '?',
            'App\\Controller\\Frontend\\Register\\RegistrationController::register' => '?',
            'App\\Controller\\Frontend\\Register\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\Frontend\\ticket\\TicketFrontendController::userindex' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Backend\\Login\\SecurityController:login' => '?',
            'App\\Controller\\Backend\\Ticket\\TicketController:backendindex' => '?',
            'App\\Controller\\Backend\\Ticket\\TicketController:delete' => '?',
            'App\\Controller\\Backend\\Ticket\\TicketController:edit' => '?',
            'App\\Controller\\Frontend\\FrontendController:index' => '?',
            'App\\Controller\\Frontend\\Login\\SecurityController:login' => '?',
            'App\\Controller\\Frontend\\Register\\RegistrationController:register' => '?',
            'App\\Controller\\Frontend\\Register\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\Frontend\\ticket\\TicketFrontendController:userindex' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
