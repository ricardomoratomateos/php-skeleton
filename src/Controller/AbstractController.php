<?php
namespace PHPSkeleton\Controller;

use \Psr\Container\ContainerInterface;

abstract class AbstractController
{
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}
