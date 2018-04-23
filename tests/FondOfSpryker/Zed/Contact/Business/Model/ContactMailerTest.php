<?php

namespace FondOfSpryker\Zed\Contact\Business\Model;

use Codeception\Test\Unit;
use org\bovigo\vfs\vfsStream;

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
     * @var \FondOfSpryker\Zed\Contact\Business\Model\ContactMailer
     */
    protected $contactMailer;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    protected $contactMailRequestTransferMock;

    /**
     * @var \org\bovigo\vfs\vfsStreamDirectory
     */
    protected $vfsStreamDirectory;

    /**
     * @return void
     */
    protected function _before()
    {
        $this->vfsStreamDirectory = vfsStream::setup(
            'root',
            null,
            [
            'config' => [
                'Shared' => [
                    'stores.php' => file_get_contents(codecept_data_dir('stores.php')),
                ],
            ],
            ]
        );

        $this->mailFacadeMock = $this->getMockBuilder('\Spryker\Zed\Mail\Business\MailFacadeInterface')
            ->disableOriginalConstructor()
            ->setMethods(['handleMail', 'sendMail'])
            ->getMock();

        $this->contactMailRequestTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\ContactMailRequestTransfer')
            ->disableOriginalConstructor()
            ->setMethods(['getLocale'])
            ->getMock();

        $this->contactMailRequestTransferMock->method('getLocale')->willReturn('de');

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
        $this->assertInstanceOf('\Generated\Shared\Transfer\ContactMailResponseTransfer', $contactMailResponseTransfer);
        $this->assertTrue($contactMailResponseTransfer->getIsSuccess());
    }
}
