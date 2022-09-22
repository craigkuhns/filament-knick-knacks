# A collection of actions, filters, and form components for Filament.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kraghammer/filament-knick-knacks.svg?style=flat-square)](https://packagist.org/packages/kraghammer/filament-knick-knacks)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kraghammer/filament-knick-knacks/run-tests?label=tests)](https://github.com/kraghammer/filament-knick-knacks/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kraghammer/filament-knick-knacks/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kraghammer/filament-knick-knacks/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kraghammer/filament-knick-knacks.svg?style=flat-square)](https://packagist.org/packages/kraghammer/filament-knick-knacks)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require kraghammer/filament-knick-knacks
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-knick-knacks-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-knick-knacks-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-knick-knacks-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-knick-knacks = new Kraghammer\FilamentKnickKnacks();
echo $filament-knick-knacks->echoPhrase('Hello, Kraghammer!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Craig Kuhns](https://github.com/craigkuhns)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
