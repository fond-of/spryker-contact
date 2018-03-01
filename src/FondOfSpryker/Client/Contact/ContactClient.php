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
     * {@inheritdoc}
     *
     * @api
     *
     * @param ContactMailRequestTransfer $contactTransfer
     *
     * @return ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailResponseTransfer)
    {
        return $this->getFactory()->createContactStub()->sendContactMailRequest($contactMailResponseTransfer);
    }
}
