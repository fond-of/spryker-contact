<?php
namespace FondOfSpryker\Zed\Contact\Business\Model;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;
use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\MailTransfer;
use FondOfSpryker\Zed\Contact\Communication\Plugin\Mail\ContactMailTypePlugin;
use Spryker\Zed\Mail\Business\MailFacadeInterface;

/**
 * @author mnoerenberg
 */
class ContactMailer
{

    /**
     * @var MailFacadeInterface
     */
    private $mailFacade;

    /**
     * @author mnoerenberg
     * @param MailFacadeInterface $mailFacade
     */
    public function __construct(MailFacadeInterface $mailFacade) {
        $this->mailFacade = $mailFacade;
    }

    /**
     * @param ContactMailRequestTransfer $contactMailRequest
     * @return ContactMailResponseTransfer
     */
    public function sendContactMail(ContactMailRequestTransfer $contactMailRequest)
    {
        $localTransfer = new LocaleTransfer();
        $localTransfer->setLocaleName($contactMailRequest->requireLocale()->getLocale());

        $mailTransfer = new MailTransfer();
        $mailTransfer->setType(ContactMailTypePlugin::MAIL_TYPE);
        $mailTransfer->setLocale($localTransfer);
        $mailTransfer->setContactMailRequest($contactMailRequest);
        $this->mailFacade->handleMail($mailTransfer);

        $response = new ContactMailResponseTransfer();
        $response->setIsSuccess(true);

        return $response;
    }
}