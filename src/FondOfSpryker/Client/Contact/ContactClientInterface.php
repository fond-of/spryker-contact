<?php
namespace FondOfSpryker\Client\Contact;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;

/**
 * @method \FondOfSpryker\Client\Contact\ContactFactory getFactory()
 */
interface ContactClientInterface
{
    /**
     * Specification:
     *  - sends a contact E-Mail.
     *
     * @api
     *
     * @param ContactMailRequestTransfer $contactMailResponseTransfer
     *
     * @return ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailResponseTransfer);
}
