# A small package to verify if an value in an array is containted within a given array.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wahlemedia/laravel-where-in-array.svg?style=flat-square)](https://packagist.org/packages/wahlemedia/laravel-where-in-array)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/wahlemedia/laravel-where-in-array/run-tests?label=tests)](https://github.com/wahlemedia/laravel-where-in-array/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/wahlemedia/laravel-where-in-array/Check%20&%20fix%20styling?label=code%20style)](https://github.com/wahlemedia/laravel-where-in-array/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/wahlemedia/laravel-where-in-array.svg?style=flat-square)](https://packagist.org/packages/wahlemedia/laravel-where-in-array)


This package adds two helper functions to the builder to search multible values within an string or an array.


## Installation

You can install the package via composer:

```bash
composer require wahlemedia/laravel-where-in-array
```

## Usage

In your Model you need to have an json object to store an array within 

```php
// Your Model Migration
Schema::create('your_model', function (Blueprint $table) {
    //...
    $table->json('some_attribute')->nullable();
    //...
});
```

If you are working with array, you should cast the field of your model

```php
    protected $casts = [
        'some_attribute' => 'array',
    ];
```

The function you can use by calling the following methods

```php
Model::whereInArray('some_attribute', ['php', 'vue']) // or
Model::whereNotInArray('some_attribute', ['foo'])
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

- [Philipp Wahle](https://github.com/fudra)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
