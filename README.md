# IDE Helpers

> This is a forked and quickly hacked together version of fynsarmy IDE helper plugin 
> adjusted to work with WinterCMS

This plugin adds [barryvdh/ide-helpers](https://github.com/barryvdh/laravel-ide-helper) package to October for better IDE support.

## Installation

* From the root of your application (where `artisan` is located.) 
* ```bash
git clone https://github.com/GregoryBrownConsultancy/wn-idehelper-plugin.git plugins/gbc/idehelper
```
* `composer update`
* `php artisan ide-helper:generate`

## Configuration

No configuration is necessary, but for use of `php artisan ide-helper:models` you may need to edit `/config/config.php` to include the model files you wish to be scanned.

## TODO

* Auto clear-compiled/generate/optimize after update
