<?php

namespace FondOfSpryker\Zed\Contact\Business;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;

interface ContactFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactEmail(ContactMailRequestTransfer $contactMailRequestTransfer): ContactMailResponseTransfer;
}
