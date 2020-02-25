# Laravel Dutch Postcode Lookup
[![Build Status](https://travis-ci.org/hpolthof/laravel-postcode-tech.svg?branch=master)](https://travis-ci.org/hpolthof/laravel-postcode-tech)

This is a Laravel implementation for the API of [Postcode.Tech](https://postcode.tech). 
You need an API key for this API to work. You can register for free and create an API Key.

The packages uses the [PHP implementation of Postcode.tech](https://github.com/hpolthof/postcode-tech).

## Installation
To install use composer

```bash
composer require hpolthof/laravel-postcode-tech
```

## Usage
Register at [Postcode.Tech](https://postcode.tech) and create an API token.

Add the following to your `.env` file:

```
POSTCODE_TOKEN="{YOUR TOKEN HERE}"
```

During installation a service provider and facade will be automatically discovered.

You can now lookup a postcode using:

```php
$address = \Postcode::find('1071BM', 29);

if ($address) {
    $street = $address->street();
    $city   = $address->city();
}
```

The method `find()` will return `null` if the postcode is not found and will return an
exception if there was an error during the API request. These exceptions can be found at: https://github.com/hpolthof/postcode-tech/tree/master/src/Exceptions.

## Disclaimer
This package can be used free of charge. Obviously this software comes as is, and there 
are no warranties or whatsoever.

If you like the package it is always appreciated if you drop a message of gratitude! ;-)

The package was build by: [Paul Olthof](mailto:hi@olthof.tech)