<?php

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * @author mnoerenberg
 */
class ContactMailResponseTransfer extends AbstractTransfer
{

    /**
     * @var bool
     */
    protected $isSuccess;

    /**
     * @var string
     */
    protected $errorMessage;

    /**
     * @module Contact
     *
     * @param bool $isSuccess
     *
     * @return $this
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;

        return $this;
    }

    /**
     * @module Contact
     *
     * @return bool
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module Contact
     *
     * @param string $errorMessage
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * @module Contact
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}
