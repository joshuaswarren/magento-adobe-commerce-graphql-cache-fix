# Creatuity GraphQL Cache Fix
## About the module
The Creatuity GraphQL Cache Fix is a Magento 2 module that corrects an error caused by using only GraphQL.
## Installation
### For Development 
- Clone the repository with the command :
```bash
git clone git@github.com:joshuaswarren/magento-adobe-commerce-graphql-cache-fix.git app/code/Creatuity/GraphqlCacheFix
```
- Run `php bin/magento setup:upgrade`

- After install magento you need to edit your composer.json file add following configuration:
```
{
[...]
  "config": {
    "allow-plugins": {
    [...]
    "phpstan/extension-installer": true,
    "phpro/grumphp-shim": true
    }
  }
  "repositories": [
    [...]
    {
      "type": "vcs",
      "url": "git@github.com:creatuity/magento-quality-tools.git"
    }
  ]
}
```
Install creatuity magento quality tools
```composer require --dev -W creatuity/magento-quality-tools:1.0.3.x-dev``` then go to `app/code/Creatuity/GraphqlCacheFix` and run initial for create github hook: ```php ../../../../vendor/bin/grumphp git:init```

### Composer package
- Declare a new repository in the main `composer.json` file :
```bash
{
  "type": "vcs",
  "url": "git@github.com:joshuaswarren/magento-adobe-commerce-graphql-cache-fix.git"
}
 ```
- Run `composer require joshuaswarren/magento-adobe-commerce-graphql-cache-fix`
- Run `php bin/magento setup:upgrade`

## Requirements
- The module requires Magento >=2.4.4 version and PHP >= 8.1
