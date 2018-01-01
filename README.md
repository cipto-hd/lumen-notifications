# Laravel 5.5 Notification for Lumen 5.x #

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ciptohadi-web-id/lumen-notifications.svg?style=flat-square)](https://packagist.org/packages/ciptohadi-web-id/lumen-notifications)
[![Total Downloads on Packagist](https://img.shields.io/packagist/dt/ciptohadi-web-id/lumen-notifications.svg?style=flat-square)](https://packagist.org/packages/ciptohadi-web-id/lumen-notifications)

This package is a wrapper of [Laravel Notification](https://laravel.com/docs/5.3/notifications) adapted to work with Lumen 5.x

## Contents

- [Installation](#installation)
- [Usage](#usage)
- [Changelog](#changelog)
- [Testing](#testing)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

## Installation ##

To install the packge, run below command in terminal:

	composer require ciptohadi-web-id/lumen-notifications
	
Or edit the `composer.json` file as seen below and then run `composer update`:

	"require": {
    	"ciptohadi-web-id/lumen-notifications": "dev-master"
    }

After that, register the package in the section "Register Service Providers" in `bootstrap/app.php`

	$app->register(\ciptohadi\LumenNotifications\LumenNotificationsServiceProvider::class);
	

## Usage

After registering the Service Provider, we'll have access to three new artisan commands, as shown below:

To create a new notification, you can run below command:
 
	php artisan make:notification
	
To create database migration for notifications, you can run below command
 
	php artisan notifications:table
	

To use the views from Laravel Notifications, you can run below command:

	php artisan lumen-notifications:publish
	
### To more information how to use Notifications: [Laravel Notifications](https://laravel.com/docs/5.5/notifications) ###

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email me at `ciptohadi79@gmail.com` instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Cipto Hadi](https://github.com/ciptohadi-web-id)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.