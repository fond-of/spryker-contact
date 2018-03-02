<?php
namespace FondOfSpryker\Zed\Contact\Business;

use Generated\Shared\Transfer\ContactMailRequestTransfer;

/**
 * @author mnoerenberg
 */
interface ContactFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactEmail(ContactMailRequestTransfer $contactMailRequestTransfer);
}
