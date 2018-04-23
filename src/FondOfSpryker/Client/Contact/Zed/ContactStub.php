<?php

namespace FondOfSpryker\Client\Contact\Zed;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;
use Spryker\Client\ZedRequest\ZedRequestClient;

class ContactStub implements ContactStubInterface
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClient
     */
    private $zedRequestClient;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClient $zedRequestClient
     */
    public function __construct(ZedRequestClient $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailRequestTransfer): ContactMailResponseTransfer
    {
        return $this->zedRequestClient->call('/contact/gateway/send-contact-mail', $contactMailRequestTransfer);
    }
}
