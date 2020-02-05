<?php

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * @author mnoerenberg
 */
class MailTransfer extends AbstractTransfer
{
    public const CONTACT_MAIL_REQUEST = 'contactMailRequest';

    public const TYPE = 'type';

    public const SENDER = 'sender';

    public const LOCALE = 'locale';

    /**
     * @var \Generated\Shared\Transfer\ContactMailRequestTransfer
     */
    protected $contactMailRequest;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer
     */
    protected $locale;

    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer|null $contactMailRequest
     *
     * @return $this
     */
    public function setContactMailRequest(?ContactMailRequestTransfer $contactMailRequest = null)
    {
        $this->contactMailRequest = $contactMailRequest;

        return $this;
    }

    /**
     * @return \Generated\Shared\Transfer\ContactMailRequestTransfer
     */
    public function getContactMailRequest()
    {
        return $this->contactMailRequest;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(?LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
