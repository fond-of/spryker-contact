<?php

namespace FondOfSpryker\Zed\Contact;

use FondOfSpryker\Shared\Contact\ContactConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class ContactConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getContactMail(): string
    {
        return $this->get(ContactConstants::CONTACT_FORM_MAIL_RECEIVER);
    }
}
