<?php
/**
 * Slim Framework controller creator (https://github.com/juliangut/slim-controller)
 *
 * @link https://github.com/juliangut/slim-controller for the canonical source repository
 * @license https://raw.githubusercontent.com/juliangut/slim-controller/master/LICENSE
 */

namespace Jgut\Slim\Controller;

use Interop\Container\ContainerInterface;

/**
 * Base Slim Framework controller.
 */
class Controller
{
    /**
     * DI container
     *
     * @var \Interop\Container\ContainerInterface
     */
    protected $container;

    /**
     * Set DI container
     *
     * @param \Interop\Container\ContainerInterface $container
     */
    final public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Get DI container
     *
     * @return \Interop\Container\ContainerInterface
     */
    final public function getContainer()
    {
        return $this->container;
    }

    /**
     * Bridge container get
     *
     * @param string $name
     */
    final public function __get($name)
    {
        return $this->container->get($name);
    }

    /**
     * Bridge container has
     *
     * @param string $name
     */
    final public function __isset($name)
    {
        return $this->container->has($name);
    }
}
