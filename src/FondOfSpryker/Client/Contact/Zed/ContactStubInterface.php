<?php
namespace FondOfSpryker\Client\Contact\Zed;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;

/**
 * @author mnoerenberg
 */
interface ContactStubInterface {

    /**
     * @param ContactMailRequestTransfer $contactMailRequestTransfer
     * @return ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailRequestTransfer);
}