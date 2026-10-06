# Creatuity GraphQL Cache Fix

[![Sponsor](https://img.shields.io/badge/Sponsor-%E2%9D%A4-pink)](https://github.com/sponsors/joshuaswarren)
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

## Support

Every bit of support helps keep magento-adobe-commerce-graphql-cache-fix alive and free. If you are able, [sponsor on GitHub](https://github.com/sponsors/joshuaswarren) or send a Lightning donation to `joshuaswarren@strike.me` to directly fund continued development and new integrations.

[![Sponsor](https://img.shields.io/badge/Sponsor-%E2%9D%A4-pink?style=for-the-badge)](https://github.com/sponsors/joshuaswarren)

If financial support is not an option, you can still make a big difference: [star the repo](https://github.com/joshuaswarren/magento-adobe-commerce-graphql-cache-fix), share it, or recommend it to a colleague. Word of mouth is how most people find magento-adobe-commerce-graphql-cache-fix.
