<?php
namespace FondOfSpryker\Client\Contact\Zed;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Spryker\Client\ZedRequest\ZedRequestClient;

/**
 * @author mnoerenberg
 */
class ContactStub implements ContactStubInterface
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClient
     */
    private $zedRequestClient;

    /**
     * @author mnoerenberg
     *
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
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailRequestTransfer)
    {
        return $this->zedRequestClient->call('/contact/gateway/send-contact-mail', $contactMailRequestTransfer);
    }
}
