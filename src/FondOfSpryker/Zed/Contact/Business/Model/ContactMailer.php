<?php

namespace FondOfSpryker\Zed\Contact\Business\Model;

use FondOfSpryker\Zed\Contact\Communication\Plugin\Mail\ContactMailTypePlugin;
use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;
use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\MailTransfer;
use Spryker\Shared\Config\Environment;
use Spryker\Zed\Mail\Business\MailFacadeInterface;
use Throwable;

class ContactMailer
{
    /**
     * @var \Spryker\Zed\Mail\Business\MailFacadeInterface
     */
    private $mailFacade;

    /**
     * @param \Spryker\Zed\Mail\Business\MailFacadeInterface $mailFacade
     */
    public function __construct(MailFacadeInterface $mailFacade)
    {
        $this->mailFacade = $mailFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailRequest
     *
     * @throws \Throwable
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactMail(ContactMailRequestTransfer $contactMailRequest)
    {
        $localTransfer = $this->createLocaleTransfer($contactMailRequest->getLocale());
        $mailTransfer = $this->createMailTransfer($contactMailRequest, $localTransfer);

        $response = new ContactMailResponseTransfer();
        try {
            $this->mailFacade->handleMail($mailTransfer);
            $response->setIsSuccess(true);
        } catch (Throwable $throwable) {
            if (!Environment::isProduction()) {
                throw $throwable;
            }

            $response->setIsSuccess(false);
            $response->setErrorMessage($throwable->getMessage());
        }

        return $response;
    }

    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactMailRequest
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \Generated\Shared\Transfer\MailTransfer
     */
    protected function createMailTransfer(ContactMailRequestTransfer $contactMailRequest, LocaleTransfer $localeTransfer): MailTransfer
    {
        $mailTransfer = new MailTransfer();
        $mailTransfer->setType(ContactMailTypePlugin::MAIL_TYPE);
        $mailTransfer->setLocale($localeTransfer);
        $mailTransfer->setContactMailRequest($contactMailRequest);

        return $mailTransfer;
    }

    /**
     * @param string $locale
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    protected function createLocaleTransfer(string $locale): LocaleTransfer
    {
        $localTransfer = new LocaleTransfer();
        $localTransfer->setLocaleName($locale);

        return $localTransfer;
    }
}
