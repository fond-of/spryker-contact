<?php

namespace FondOfSpryker\Zed\Contact\Communication\Controller;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \FondOfSpryker\Zed\Contact\Business\ContactFacade getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\ContactMailRequestTransfer $contactTransfer
     *
     * @return \Generated\Shared\Transfer\ContactMailResponseTransfer
     */
    public function sendContactMailAction(ContactMailRequestTransfer $contactTransfer)
    {
        return $this->getFacade()->sendContactEmail($contactTransfer);
    }
}
