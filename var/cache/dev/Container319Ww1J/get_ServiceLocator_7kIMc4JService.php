<?php

namespace Container319Ww1J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7kIMc4JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7kIMc4J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7kIMc4J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidate' => ['privates', '.errored..service_locator.7kIMc4J.App\\Entity\\Candidate', NULL, 'Cannot autowire service ".service_locator.7kIMc4J": it references class "App\\Entity\\Candidate" but no such service exists.'],
        ], [
            'candidate' => 'App\\Entity\\Candidate',
        ]);
    }
}