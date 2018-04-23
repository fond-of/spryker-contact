<?php

namespace FondOfSpryker\Client\Contact;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \FondOfSpryker\Client\Contact\ContactFactory getFactory()
 */
class ContactClient extends AbstractClient implements ContactClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailResponseTransfer): ContactMailResponseTransfer
    {
        return $this->getFactory()->createContactStub()->sendContactMailRequest($contactMailResponseTransfer);
    }
}
