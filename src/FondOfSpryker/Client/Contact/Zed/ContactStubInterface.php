<?php
namespace FondOfSpryker\Client\Contact\Zed;

use Generated\Shared\Transfer\ContactMailRequestTransfer;

/**
 * @author mnoerenberg
 */
interface ContactStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailRequestTransfer);
}
