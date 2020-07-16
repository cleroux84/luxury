<?php

namespace ContainerJkoO9LQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UqtZP8NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UqtZP8N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UqtZP8N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidate' => ['privates', '.errored..service_locator.UqtZP8N.App\\Entity\\Candidate', NULL, 'Cannot autowire service ".service_locator.UqtZP8N": it references class "App\\Entity\\Candidate" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.UqtZP8N.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.UqtZP8N": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'candidate' => 'App\\Entity\\Candidate',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
