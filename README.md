# spryker-contact
[![PHP from Travis config](https://img.shields.io/travis/php-v/symfony/symfony.svg)](https://php.net/)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/fond-of-spryker/contact)

This is a simple contact form for spryker.

## Install
### 1. Execute composer command
```
composer require fond-of-spryker/contact
```

### 2. Add controller provider in YvesBootstrap.php in getControllerProviderStack()
```
new ContactControllerProvider($isSsl),
```

### 3. Add mail plugin in Pyz Zed/Mail/MailDependencyProvider.php in MAIL_TYPE_COLLECTION
```
$mailCollection->add(new ContactMailTypePlugin());
```

### 4. Create your own form template under:
```
src/Pyz/Yves/Contact/Theme/default/index/index.twig
```

### 5. Append glossary entries from contact_glossary.csv to glossary.csv and execute commands
```
vendor/bin/console data:import:glossary
vendor/bin/console collector:storage:export
```

### 6. Create transfer objects
```
vendor/bin/console transfer:generate
```

### 7. Add this to your configuration file. This EMail receives the contact form.
```
// ---------- Contact
$config[\FondOfSpryker\Shared\Contact\ContactConstants::CONTACT_FORM_MAIL_RECEIVER] = 'example@example.org';
```

### 8. Enjoy
(Edit route in ContactControllerProvider if it's your wish)
```
/{$locale}/contacts 
```
