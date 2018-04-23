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
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailResponseTransfer): ContactMailResponseTransfer;
}
