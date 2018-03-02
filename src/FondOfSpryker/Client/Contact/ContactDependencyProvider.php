<?php
namespace FondOfSpryker\Client\Contact;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

/**
 * @author mnoerenberg
 */
class ContactDependencyProvider extends AbstractDependencyProvider
{
    const SERVICE_ZED = 'zed_service';

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    public function provideServiceLayerDependencies(Container $container)
    {
        $container[static::SERVICE_ZED] = function (Container $container) {
            return $container->getLocator()->zedRequest()->client();
        };

        return $container;
    }
}
