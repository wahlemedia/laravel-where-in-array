# A small package to verify in an value in an array is containted within a given array.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wahlemedia/laravel-where-in-array.svg?style=flat-square)](https://packagist.org/packages/wahlemedia/laravel-where-in-array)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/wahlemedia/laravel-where-in-array/run-tests?label=tests)](https://github.com/wahlemedia/laravel-where-in-array/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/wahlemedia/laravel-where-in-array/Check%20&%20fix%20styling?label=code%20style)](https://github.com/wahlemedia/laravel-where-in-array/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/wahlemedia/laravel-where-in-array.svg?style=flat-square)](https://packagist.org/packages/wahlemedia/laravel-where-in-array)

---
This repo can be used to scaffold a Laravel package. Follow these steps to get started:

1. Press the "Use template" button at the top of this repo to create a new repo with the contents of this laravel-where-in-array
2. Run "./configure-laravel-where-in-array.sh" to run a script that will replace all placeholders throughout all the files
3. Remove this block of text.
4. Have fun creating your package.
5. If you need help creating a package, consider picking up our <a href="https://laravelpackage.training">Laravel Package Training</a> video course.
---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-where-in-array.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-where-in-array)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require wahlemedia/laravel-where-in-array
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Wahlemedia\WhereInArray\WhereInArrayServiceProvider" --tag="laravel-where-in-array-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Wahlemedia\WhereInArray\WhereInArrayServiceProvider" --tag="laravel-where-in-array-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-where-in-array = new Wahlemedia\WhereInArray();
echo $laravel-where-in-array->echoPhrase('Hello, Spatie!');
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

- [Philipp Wahle](https://github.com/wahlemedia)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
