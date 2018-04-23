<?php

namespace FondOfSpryker\Client\Contact;

use FondOfSpryker\Client\Contact\Zed\ContactStub;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\ZedRequest\ZedRequestClient;

class ContactFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\Contact\Zed\ContactStub
     */
    public function createContactStub(): ContactStub
    {
        return new ContactStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClient
     */
    protected function getZedRequestClient(): ZedRequestClient
    {
        return $this->getProvidedDependency(ContactDependencyProvider::ZED_CLIENT);
    }
}
