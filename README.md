# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hexafuchs/:package_slug.svg?style=flat-square)](https://packagist.org/packages/hexafuchs/:package_slug)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hexafuchs/:package_slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/hexafuchs/:package_slug/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hexafuchs/:package_slug/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/hexafuchs/:package_slug/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hexafuchs/:package_slug.svg?style=flat-square)](https://packagist.org/packages/hexafuchs/:package_slug)
<!--delete-->
---
This repo can be used to scaffold a Laravel package. Unless you are a member of Hexafuchs, please use the 
[Original Template by Spatie](https://github.com/spatie/package-skeleton-laravel/).

Follow these steps to get started:

1. Press the "Use this template" button at the top of this repo to create a new repo with the contents of this skeleton.
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files.
3. Have fun creating your package.
4. If you need help creating a package, consider picking up our <a href="https://laravelpackage.training">Laravel Package Training</a> video course.
---
<!--/delete-->
This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require hexafuchs/:package_slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag=":package_slug-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=":package_slug-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag=":package_slug-views"
```

## Documentation

You can find the entire documentation at [https://hexafuchs.github.io/:package_name/](https://hexafuchs.github.io/:package_name/guide/getting-started/index.html).

## Testing

```bash
composer test
```

## Docs

```bash
composer run docs:install  # only required on first run
composer run docs
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
