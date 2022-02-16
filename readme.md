# Laravel-Locale-Middleware - A helper for localizing API routes

Easily add a locale option to all your API routes

## Installation

```
$ composer require berthott/laravel-locale-middleware
```

## Basic Usage

* The package automatically adds a `locale` query parameter to all your API routes.
* Setting this `locale` query parameter will result in changing the Laravel locale for this specific request.
* In order for localization to work you'll need to provide the corresponding localization files. See [Laravel Lang](https://github.com/Laravel-Lang/lang) for a convenient way to install these.

## Alias / Middleware Groups

* By default the middleware will be added to your `api` Middleware Group.
* You may set the `groups` option to an empty array, or an array of your custom Middleware Groups to add the middleware to.
* In addition you could add the route directly via it's alias `locale`.

## Options

To change the default options use
```
$ php artisan vendor:publish --provider="berthott\LocaleMiddleware\LocaleMiddlewareProvider" --tag="config"
```
* `queryVariableName`: specifies a custom name for the query parameter. Defaults to `locale`.
* `groups`: an array of middleware groups to add the locale middleware to. Defaults to `['api']`.

## Compatibility

Tested with Laravel 8.x.

## License

See [License File](license.md). Copyright © 2021 Jan Bladt.