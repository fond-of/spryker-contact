<?php

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * @author mnoerenberg
 */
class LocaleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    protected $localeName;

    /**
     * @param string $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }
}
