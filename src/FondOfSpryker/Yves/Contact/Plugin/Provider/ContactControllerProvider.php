<?php

namespace FondOfSpryker\Yves\Contact\Plugin\Provider;

use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class ContactControllerProvider extends AbstractYvesControllerProvider
{
    public const CONTACTFORM_INDEX = 'contact-index';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $allowedLocalesPattern = $this->getAllowedLocalesPattern();
        $this->createGetController('/{contacts}', static::CONTACTFORM_INDEX, 'Contact', 'Index', 'index')
            ->method('GET|POST')
            ->assert('contacts', $allowedLocalesPattern . 'contacts')
            ->value('contacts', 'contacts');
    }
}
