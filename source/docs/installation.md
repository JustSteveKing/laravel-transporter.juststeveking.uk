---
title: Installation
description: Installing Laravel Transporter in your Laravel application is super easy.
extends: _layouts.documentation
section: content
---

# Installation {#installation}

To install Laravel Transporter you will need to be using Laravel 8+ and PHP 8+ - once you are using these, it is a simple case of using composer to install the package:

```bash
composer require juststeveking/laravel-transporter
```
Once this has been installed, you can publish the config file using the following command:

```bash
php artisan vendor:publish --provider="JustSteveKing\Transporter\TransporterServiceProvider" --tag="transporter-config"
```

The contents of this config file will look like the following:

```php
return [
    'base_uri' => env('TRANSPORTER_BASE_URI'),
];
```

This configuration option is completely optional, and is not required for most use cases. If you only need to integrate with the one API - feel free to use this option.