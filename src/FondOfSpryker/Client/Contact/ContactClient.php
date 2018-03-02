<?php
namespace FondOfSpryker\Client\Contact;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \FondOfSpryker\Client\Contact\ContactFactory getFactory()
 */
class ContactClient extends AbstractClient implements ContactClientInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailResponseTransfer)
    {
        return $this->getFactory()->createContactStub()->sendContactMailRequest($contactMailResponseTransfer);
    }
}
