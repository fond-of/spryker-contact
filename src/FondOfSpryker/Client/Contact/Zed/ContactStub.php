<?php
namespace FondOfSpryker\Client\Contact\Zed;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;
use Spryker\Client\ZedRequest\ZedRequestClient;

/**
 * @author mnoerenberg
 */
class ContactStub implements ContactStubInterface {

    /**
     * @var ZedRequestClient
     */
    private $zedRequestClient;

    /**
     * @author mnoerenberg
     * @param ZedRequestClient $zedRequestClient
     */
    public function __construct(ZedRequestClient $zedRequestClient) {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param ContactMailRequestTransfer $contactMailRequestTransfer
     * @return ContactMailResponseTransfer
     */
    public function sendContactMailRequest(ContactMailRequestTransfer $contactMailRequestTransfer) {
        return $this->zedRequestClient->call('/contact/gateway/send-contact-mail', $contactMailRequestTransfer);
    }
}
