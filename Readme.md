# Https Off Loading

Activate this module if your Thelia if behind a HTTPS proxy

## Installation

### Manually

* Copy the module into ```<thelia_root>/local/modules/``` directory and be sure that the name of the module is HttpsOffloading.
* Activate it in your thelia administration panel
  * Or with console command : ```php Thelia --env=prod module:activate HttpsOffloading```

### Composer

Add it in your main thelia composer.json file

```
composer require thelia/https-off-loading-module:~1.0
```
