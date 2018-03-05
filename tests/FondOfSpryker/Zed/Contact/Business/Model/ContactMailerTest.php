<?php

namespace FondOfSpryker\Zed\Contact\Business\Model;

use Codeception\Test\Unit;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;

/**
 * @author mnoerenberg
 */
class ContactMailerTest extends Unit
{

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    protected $mailFacadeMock;

    /**
     * @var ContactMailer
     */
    protected $contactMailer;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    protected $contactMailRequestTransferMock;

    /**
     * @var vfsStreamDirectory
     */
    protected $vfsStreamDirectory;

    /**
     * @return void
     */
    protected function _before()
    {
        $this->vfsStreamDirectory = vfsStream::setup('root', null, [
            'config' => [
                'Shared' => [
                    'stores.php' => file_get_contents(codecept_data_dir('stores.php'))
                ],
            ],
        ]);

       $this->mailFacadeMock = $this->getMockBuilder('\Spryker\Zed\Mail\Business\MailFacade')
            ->disableOriginalConstructor()
            ->setMethods(['handleMail'])
            ->getMock();

        $this->contactMailRequestTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\ContactMailRequestTransfer')
            ->disableOriginalConstructor()
            ->setMethods(['getLocale'])
            ->getMock();

       $this->contactMailer = new ContactMailer($this->mailFacadeMock);
    }

    /**
     * @return void
     */
    protected function _after()
    {
        $this->mailFacadeMock = null;
        $this->contactMailer = null;
        $this->contactMailRequestTransferMock = null;
        $this->vfsStreamDirectory = null;
    }

    /**
     * @return void
     */
    public function testSendContactMailWasSuccessfull()
    {
       $contactMailResponseTransfer = $this->contactMailer->sendContactMail($this->contactMailRequestTransferMock);
       $this->assertInstanceOf('Generated\Shared\Transfer\ContactMailResponseTransfer', $contactMailResponseTransfer);
       $this->assertTrue($contactMailResponseTransfer->getIsSuccess());
    }
}
