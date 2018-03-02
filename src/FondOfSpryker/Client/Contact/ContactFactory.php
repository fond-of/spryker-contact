<?php
namespace FondOfSpryker\Client\Contact;

use FondOfSpryker\Client\Contact\Zed\ContactStub;
use Spryker\Client\Kernel\AbstractFactory;

/**
 * @author mnoerenberg
 */
class ContactFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\Contact\Zed\ContactStub
     */
    public function createContactStub()
    {
        return new ContactStub(
            $this->getProvidedDependency(ContactDependencyProvider::SERVICE_ZED)
        );
    }
}
