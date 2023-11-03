# Fila style

[![Latest Version on Packagist](https://img.shields.io/packagist/v/valpuia/fila-style.svg?style=flat-square)](https://packagist.org/packages/valpuia/fila-style)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/valpuia/fila-style/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/valpuia/fila-style/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/valpuia/fila-style/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/valpuia/fila-style/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/valpuia/fila-style.svg?style=flat-square)](https://packagist.org/packages/valpuia/fila-style)

## Installation

You can install the package via composer:

```bash
composer require valpuia/fila-style
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="fila-style-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="fila-style-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filaStyle = new Valpuia\FilaStyle();
echo $filaStyle->echoPhrase('Hello, Valpuia!');
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

- [Valpuia](https://github.com/valpuia)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
