<?php

namespace FondOfSpryker\Zed\Contact\Business;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\Contact\Business\ContactBusinessFactory getFactory()
 */
class ContactFacade extends AbstractFacade implements ContactFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailRequest
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactEmail(ContactMailRequestTransfer $contactMailRequest): ContactMailResponseTransfer
    {
        return $this->getFactory()->createContactMailer()->sendContactMail($contactMailRequest);
    }
}
