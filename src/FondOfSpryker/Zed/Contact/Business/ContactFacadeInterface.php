<?php
namespace FondOfSpryker\Zed\Contact\Business;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;

/**
 * @author mnoerenberg
 */
interface ContactFacadeInterface
{

    /**
     * @param ContactMailRequestTransfer $contactMailRequestTransfer
     * @return ContactMailResponseTransfer
     */
    public function sendContactEmail(ContactMailRequestTransfer $contactMailRequestTransfer);
}