<?php
namespace FondOfSpryker\Yves\Contact\Controller;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use FondOfSpryker\Yves\Contact\Form\ContactForm;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \FondOfSpryker\Yves\Contact\ContactFactory getFactory()
 * @method \FondOfSpryker\Client\Contact\ContactClientInterface getClient()
 * @author mnoerenberg
 */
class IndexController extends AbstractController
{

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function indexAction(Request $request)
    {
        $contactForm = $this->getFactory()->getFormFactory()->createContactForm()->handleRequest($request);

        $success = null;
        if ($contactForm->isValid()) {
            $contactMailRequest = new ContactMailRequestTransfer();
            $contactMailRequest->setComment($contactForm->getData()[ContactForm::FIELD_COMMENT]);
            $contactMailRequest->setEmail($contactForm->getData()[ContactForm::FIELD_MAIL]);
            $contactMailRequest->setName($contactForm->getData()[ContactForm::FIELD_NAME]);
            $contactMailRequest->setPhone($contactForm->getData()[ContactForm::FIELD_PHONE]);
            $contactMailRequest->setLocale($this->getLocale());

            $contactMailResponse = $this->getClient()->sendContactMailRequest($contactMailRequest);
            $success  = $contactMailResponse->getIsSuccess();
        }

        return $this->viewResponse([
            'contactForm' => $contactForm->createView(),
            'success' => $success
        ]);
    }
}