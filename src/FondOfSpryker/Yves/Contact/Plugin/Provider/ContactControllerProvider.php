<?php

namespace FondOfSpryker\Yves\Contact\Plugin\Provider;

use Pyz\Yves\Application\Plugin\Provider\AbstractYvesControllerProvider;
use Silex\Application;

class ContactControllerProvider extends AbstractYvesControllerProvider
{
    const CONTACTFORM_INDEX = 'contact-index';

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
