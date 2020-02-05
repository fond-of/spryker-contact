<?php

namespace FondOfSpryker\Yves\Contact;

use FondOfSpryker\Yves\Contact\Form\FormFactory;
use Spryker\Yves\Kernel\AbstractFactory;

class ContactFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Yves\Contact\Form\FormFactory
     */
    public function getFormFactory(): FormFactory
    {
        return new FormFactory();
    }
}
