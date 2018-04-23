<?php

namespace FondOfSpryker\Yves\Contact\Form;

use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Yves\Kernel\AbstractFactory;
use Symfony\Component\Form\FormInterface;

class FormFactory extends AbstractFactory
{
    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    public function createContactForm(): FormInterface
    {
        return $this->getFormFactory()->create(ContactForm::class);
    }

    /**
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getFormFactory()
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY);
    }
}
