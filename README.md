# Stubs for PHP Rdkafka extension (0.9.1 version)

[![Build Status](https://travis-ci.org/kwn/php-rdkafka-stubs.svg?branch=master)](https://travis-ci.org/kwn/php-rdkafka-stubs)
[![Latest Stable Version](https://poser.pugx.org/kwn/php-rdkafka-stubs/v/stable)](https://packagist.org/packages/kwn/php-rdkafka-stubs)

This package provides you a set of stubs for [RdKafka extension](https://github.com/arnaud-lb/php-rdkafka). 
It supports version 0.9.1 with some recent changes (some methods in `RdKafka` class were deprecated e.g. `metadata()`, and 
replaced with getter convention e.g. `getMetadata()`).

## Installation

Add package to your composer.json

```json
{
    "require": {
        "kwn/php-rdkafka-stubs": "^0.0.4"
    }
}
```

And update your vendors

```
$ php composer.phar update kwn/php-rdkafka-stubs
```

## Usage

Once package is installed, your IDE should simply discover all stubs automatically. Please notice, that `kwn/php-rdkafka-stubs`
package has no autoloader configuration provided, so stubs classes are visible in your IDE, but don't clashes with `rdkafka`
extension namespaces.
