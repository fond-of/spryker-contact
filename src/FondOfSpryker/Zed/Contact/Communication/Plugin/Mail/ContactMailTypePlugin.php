<?php

namespace  FondOfSpryker\Zed\Contact\Communication\Plugin\Mail;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Mail\Business\Model\Mail\Builder\MailBuilderInterface;
use Spryker\Zed\Mail\Dependency\Plugin\MailTypePluginInterface;

/**
 * @method \FondOfSpryker\Zed\Contact\ContactConfig getConfig()
 * @method \FondOfSpryker\Zed\Contact\Business\ContactFacade getFacade()
 */
class ContactMailTypePlugin extends AbstractPlugin implements MailTypePluginInterface
{
    const MAIL_TYPE = 'contact mail';

    /**
     * @return string
     */
    public function getName(): string
    {
        return static::MAIL_TYPE;
    }

    /**
     * @param \Spryker\Zed\Mail\Business\Model\Mail\Builder\MailBuilderInterface $mailBuilder
     *
     * @return void
     */
    public function build(MailBuilderInterface $mailBuilder): void
    {
        $this
            ->setSubject($mailBuilder)
            ->setHtmlTemplate($mailBuilder)
            ->setTextTemplate($mailBuilder)
            ->setSender($mailBuilder)
            ->setRecipient($mailBuilder);
    }

    /**
     * @param \Spryker\Zed\Mail\Business\Model\Mail\Builder\MailBuilderInterface $mailBuilder
     *
     * @return $this
     */
    protected function setRecipient(MailBuilderInterface $mailBuilder): ContactMailTypePlugin
    {
        $mailBuilder->addRecipient($this->getConfig()->getContactMail(), '');
        return $this;
    }

    /**
     * @param \Spryker\Zed\Mail\Business\Model\Mail\Builder\MailBuilderInterface $mailBuilder
     *
     * @return $this
     */
    protected function setSubject(MailBuilderInterface $mailBuilder): ContactMailTypePlugin
    {
        $mailBuilder->setSubject('contact.mail.subject');
        return $this;
    }

    /**
     * @param \Spryker\Zed\Mail\Business\Model\Mail\Builder\MailBuilderInterface $mailBuilder
     *
     * @return $this
     */
    protected function setHtmlTemplate(MailBuilderInterface $mailBuilder): ContactMailTypePlugin
    {
        $mailBuilder->setHtmlTemplate('contact/mail/contact.html.twig');
        return $this;
    }

    /**
     * @param \Spryker\Zed\Mail\Business\Model\Mail\Builder\MailBuilderInterface $mailBuilder
     *
     * @return $this
     */
    protected function setTextTemplate(MailBuilderInterface $mailBuilder): ContactMailTypePlugin
    {
        $mailBuilder->setTextTemplate('contact/mail/contact.text.twig');
        return $this;
    }

    /**
     * @param \Spryker\Zed\Mail\Business\Model\Mail\Builder\MailBuilderInterface $mailBuilder
     *
     * @return $this
     */
    protected function setSender(MailBuilderInterface $mailBuilder): ContactMailTypePlugin
    {
        $mailBuilder->setSender($mailBuilder->getMailTransfer()->getContactMailRequest()->getMail(), $mailBuilder->getMailTransfer()->getContactMailRequest()->getName());
        return $this;
    }
}
