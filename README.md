# Stubs for PHP Rdkafka extension (4.0 version)

[![Build Status](https://travis-ci.org/kwn/php-rdkafka-stubs.svg?branch=master)](https://travis-ci.org/kwn/php-rdkafka-stubs)
[![Latest Stable Version](https://poser.pugx.org/kwn/php-rdkafka-stubs/v/stable)](https://packagist.org/packages/kwn/php-rdkafka-stubs)

This package provides you a set of stubs for [RdKafka extension](https://github.com/arnaud-lb/php-rdkafka). It currently supports version 6.0. For older verisions of rdkafka extenstion (3.x and 0.9) please use version 1.x of this repository. 

## Installation

Add package to your composer.json dev dependencies

```
$ composer require kwn/php-rdkafka-stubs --dev
```

## Usage

Once package is installed, your IDE should simply discover all stubs automatically. Please notice, that `kwn/php-rdkafka-stubs`
package has no autoloader configuration provided, so stubs classes are visible in your IDE, but don't clashes with `rdkafka`
extension namespaces.
