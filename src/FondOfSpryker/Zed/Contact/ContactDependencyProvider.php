<?php
namespace FondOfSpryker\Zed\Contact;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

/**
 * @author mnoerenberg
 */
class ContactDependencyProvider extends AbstractBundleDependencyProvider
{
    const FACADE_MAIL = 'FACADE_MAIL';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container)
    {
        $container[static::FACADE_MAIL] = function (Container $container) {
            return $container->getLocator()->mail()->facade();
        };

        return $container;
    }
}
