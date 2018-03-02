<?php
namespace FondOfSpryker\Client\Contact;

use Generated\Shared\Transfer\ContactMailRequestTransfer;

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
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailResponseTransfer);
}
