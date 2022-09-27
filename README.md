# Laravel Spam Keyword Validation

[![Latest Version on Packagist](https://img.shields.io/packagist/v/justijndepover/laravel-spam-keyword-validation.svg?style=flat-square)](https://packagist.org/packages/justijndepover/laravel-spam-keyword-validation)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/justijndepover/laravel-spam-keyword-validation.svg?style=flat-square)](https://packagist.org/packages/justijndepover/laravel-spam-keyword-validation)

This package adds a validation rule to Laravel to block requests based on frequently used SPAM words like `bitcoin`, `cryptocurrency`, etc...
For a full list, check out the config file

## Installation

You can install the package with composer

```sh
composer require justijndepover/laravel-spam-keyword-validation
```

After installation you can optionally publish your configuration file

```sh
php artisan vendor:publish --tag="laravel-spam-keyword-validation-config"
```

## configuration

This is the config file

```php
<?php

return [
    /**
     * The list of keywords which cannot appear in the request value
     */
    "keywords" => [
        "http://",
        "https://",
        "www",
        "ftp://",
        "mailto:",
        "smb://",
        "afp://",
        "file://",
        "gopher://",
        "news://",
        "ssl://",
        "sslv2://",
        "sslv3://",
        "tls://",
        "tcp://",
        "udp://",
        "url=",
        "href=",
        "dating",
        "sex",
        "porn",
        "fuck",
        "free",
        "win",
        "buy",
        "captcha",
        "spam",
        "hello. and bye.",
        "mail.ru",
        "reading this message",
        "reading my message",
        "reading through my message",
        "are whitelisted",
        "great website",
        "late client",
        "ciao a tutti",
        "viagra",
        "cheap",
        "casino",
        "advertising",
        "keyword",
        "promotion",
        "porntubered",
        "ps: how are you?",
        "beautiful models",
        "privet",
        "beautiful girls",
        "best girls",
        "dosug",
        "trustable",
        "look at the",
        "v7bomdefex",
        "what is it -",
        "email marketing",
        "read your site",
        "crypto",
        "cryptography",
        "cryptocurrency",
        "bitcoin",
        "ethereum",
        "dogecoin",
    ],

];

```

## Usage

Your request can be validated with the blockSpamKeywords validation rule:

$request->validate([
    'message' => ['blockSpamKeywords'],
])

## Security

If you find any security related issues, please open an issue or contact me directly at [justijndepover@gmail.com](justijndepover@gmail.com).

## Contribution

If you wish to make any changes or improvements to the package, feel free to make a pull request.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
