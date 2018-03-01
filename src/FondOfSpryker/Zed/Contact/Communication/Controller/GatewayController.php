<?php
namespace FondOfSpryker\Zed\Contact\Communication\Controller;

use Generated\Shared\Transfer\ContactMailRequestTransfer;
use Generated\Shared\Transfer\ContactMailResponseTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \FondOfSpryker\Zed\Contact\Business\ContactFacade getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param ContactMailRequestTransfer $contactTransfer
     * @return ContactMailResponseTransfer
     */
    public function sendContactMailAction(ContactMailRequestTransfer $contactTransfer)
    {
        return $this->getFacade()->sendContactEmail($contactTransfer);
    }
}
