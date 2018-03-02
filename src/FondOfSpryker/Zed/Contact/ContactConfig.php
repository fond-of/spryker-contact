<?php
namespace FondOfSpryker\Zed\Contact;

use Spryker\Zed\Kernel\AbstractBundleConfig;

/**
 * @author mnoerenberg
 */
class ContactConfig extends AbstractBundleConfig
{
    private const CONTACT_EMAIL = 'markus.noerenberg@fondof.de';

    /**
     * @return string
     */
    public function getContactMail()
    {
        return self::CONTACT_EMAIL;
    }
}
