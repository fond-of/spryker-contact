<?php

namespace FondOfSpryker\Zed\Contact\Business;

use FondOfSpryker\Zed\Contact\Business\Model\ContactMailer;
use FondOfSpryker\Zed\Contact\ContactDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Spryker\Zed\Mail\Business\MailFacadeInterface;

/**
 * @method \FondOfSpryker\Zed\Contact\ContactConfig getConfig()
 */
class ContactBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\Contact\Business\Model\ContactMailer
     */
    public function createContactMailer()
    {
        return new ContactMailer($this->getMailFacade());
    }

    /**
     * @return \Spryker\Zed\Mail\Business\MailFacadeInterface
     */
    protected function getMailFacade(): MailFacadeInterface
    {
        return $this->getProvidedDependency(ContactDependencyProvider::FACADE_MAIL);
    }
}
