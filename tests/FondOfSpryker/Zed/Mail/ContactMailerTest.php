<?php
namespace FondOfSpryker\Zed\Mail;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\Contact\Business\Model\ContactMailer;
use Spryker\Shared\Config\Config;

/**
 * @author mnoerenberg
 */
class ContactMailerTest extends Unit
{
    /**
     * @var ContactMailer
     */
    protected $contactMailer;

    /**
     * @var vfsStreamDirectory
     */
    protected $vfsStreamDirectory;

    /**
     * @inheritdoc
     */
    protected function _before()
    {
        $this->vfsStreamDirectory = vfsStream::setup('root', null, [
            'config' => [
                'Shared' => [
                    'stores.php' => file_get_contents(codecept_data_dir('stores.php')),
                    'config_default.php' => '<?php'
                ]
            ]
        ]);
        $this->contactMailer = new ContactMailer();
    }

    /**
     *
     */
    public function testGetDefaultMinQty()
    {
        Config::getInstance()->init();
        $this->assertEquals(10, $this->availabilityConfig->getDefaultMinQty());
    }

    // tests
    public function testGetCustomDefaultMinQty()
    {
        $fileUrl = vfsStream::url('root/config/Shared/config_default.php');
        $newFileContent = file_get_contents(codecept_data_dir('config_default.php'));
        file_put_contents($fileUrl, $newFileContent);
        $this->assertEquals(50, $this->availabilityConfig->getDefaultMinQty());
    }
}