<?php

namespace FondOfSpryker\Yves\Contact\Controller;

use FondOfSpryker\Yves\Contact\Form\ContactForm;
use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \FondOfSpryker\Yves\Contact\ContactFactory getFactory()
 * @method \FondOfSpryker\Client\Contact\ContactClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function indexAction(Request $request)
    {
        $form = $this->getFactory()->getFormFactory()->createContactForm()->handleRequest($request);

        $success = null;
        if ($this->isFormValid($form)) {
            $request = $this->createContactMailRequestTransfer($form);
            $response = $this->getClient()->sendContactMailRequest($request);
            $success = $response->getIsSuccess();
        }

        return $this->viewResponse(
            [
                'contactForm' => $form->createView(),
                'success' => $success,
            ]
        );
    }

    /**
     * @param \Symfony\Component\Form\FormInterface $form
     *
     * @return \Generated\Shared\Transfer\ContactMailRequestTransfer
     */
    protected function createContactMailRequestTransfer(FormInterface $form): ContactMailRequestTransfer
    {
        $contactMailRequest = new ContactMailRequestTransfer();
        $contactMailRequest->setComment($form->getData()[ContactForm::FIELD_COMMENT]);
        $contactMailRequest->setMail($form->getData()[ContactForm::FIELD_MAIL]);
        $contactMailRequest->setName($form->getData()[ContactForm::FIELD_NAME]);
        $contactMailRequest->setPhone($form->getData()[ContactForm::FIELD_PHONE]);
        $contactMailRequest->setLocale($this->getLocale());

        return $contactMailRequest;
    }

    /**
     * @param \Symfony\Component\Form\FormInterface $form
     *
     * @return bool
     */
    protected function isFormValid(FormInterface $form): bool
    {
        return $form->isValid() && empty($form->getData()[ContactForm::FIELD_ANTI_SPAM]);
    }
}
