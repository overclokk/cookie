# Cookie Class API

[![GitHub release](https://img.shields.io/github/release/overclokk/cookie.svg)]()
[![License](https://img.shields.io/packagist/l/overclokk/cookie.svg)]()
[![Total Downloads](https://img.shields.io/packagist/dt/overclokk/cookie.svg)](https://packagist.org/packages/overclokk/cookie)

### A simple and light php class for Cookie!

Get and set cookies in PHP with ease.

## Installation

Install this package through Composer:

    `composer require overclokk/cookie`

## PHP Implementation

Autoload the vendor classes:

```php
    require_once 'vendor/autoload.php'; // Path may vary
```

And then use the `Cookie` implementation:

```php
    $cookie = new \Overclokk\Cookie\Cookie();
```
or
```php
    $cookie = new \Overclokk\Cookie\Cookie( $_COOKIE );
```


## Usage

### Get a cookie

This will return `null` if the cookie doesn't exist or is expired.

```php
    $cookieValue = $cookie->get( 'cookieName' );
```

### Store a cookie for a limited time

If you don't specify `$minutesValid`, a default of 0 will be used.

```php
    $minutesValid = 120 * 60;
    $cookie->set( 'cookieName', 'cookieValue', $minutesValid );
```

### Store a cookie forever

```php
    $cookie->forever( 'cookieName', 'cookieValue' );
```

### Delete a cookie

If the cookie doesn't exist, nothing will happen...

```php
    $cookie->delete('cookieName');
```