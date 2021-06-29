# Slang Retail Voice Assistant

![Packagist Version (custom server)](https://img.shields.io/packagist/v/immohsin/magento2?style=plastic)

Slanglabs Retail Assistant Extension lets developer add voice assistant to there magento 2 store in a truely no-code way.

Sign up and create your retail assistant on the [SlangLabs Console](console.slanglabs.in).

The extension follows the following practices:

- A minimum of PHP 5.3 is required.
- composer v2.0.0

### Installation

Run this commands from the magento root diirectory:

```shell
$ composer require immohsin/magento2
$ bin/magento setup:upgrade
```

### Usage

- After Installation, You would you see configuratiion setting on the magento admin store.
  Go to `Store > Configuration > Slang Assistant > Retail Voice Assistant`.
- Update the form with the credentials from slang console and select languages of your preference.
- Save the config and clean up the cache.
- Head over to the magento store and you should see a slang microphone appears on the bottom right of the screen.
