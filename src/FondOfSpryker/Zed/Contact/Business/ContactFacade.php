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
     * @param ContactMailRequestTransfer $contactMailRequest
     * @return ContactMailResponseTransfer
     */
    public function sendContactEmail(ContactMailRequestTransfer $contactMailRequest)
    {
        return $this->getFactory()->createContactMailer()->sendContactMail($contactMailRequest);
    }
}