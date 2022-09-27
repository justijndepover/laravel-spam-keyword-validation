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
return [
];
```

## Usage

## Security

If you find any security related issues, please open an issue or contact me directly at [justijndepover@gmail.com](justijndepover@gmail.com).

## Contribution

If you wish to make any changes or improvements to the package, feel free to make a pull request.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
