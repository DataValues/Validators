# DataValues Validators

DataValues Validators is a small library that contains common ValueValidator implementations.

It is part of the [DataValues set of libraries](https://github.com/DataValues).

[![Build Status](https://secure.travis-ci.org/DataValues/Validators.png?branch=master)](http://travis-ci.org/DataValues/Validators)
[![Coverage Status](https://coveralls.io/repos/DataValues/Validators/badge.png)](https://coveralls.io/r/DataValues/Validators)

On [Packagist](https://packagist.org/packages/data-values/validators):
[![Latest Stable Version](https://poser.pugx.org/data-values/validators/version.png)](https://packagist.org/packages/data-values/validators)
[![Download count](https://poser.pugx.org/data-values/validators/d/total.png)](https://packagist.org/packages/data-values/validators)

## Installation

The recommended way to use this library is via [Composer](http://getcomposer.org/).

### Composer

To add this package as a local, per-project dependency to your project, simply add a
dependency on `data-values/validators` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
version 1.0 of this package:

    {
        "require": {
            "data-values/validators": "1.0.*"
        }
    }

### Manual

Get the code of this package, either via git, or some other means. Also get all dependencies.
You can find a list of the dependencies in the "require" section of the composer.json file.
Then take care of autoloading the classes defined in the src directory.

## Tests

This library comes with a set up PHPUnit tests that cover all non-trivial code. You can run these
tests using the PHPUnit configuration file found in the root directory. The tests can also be run
via TravisCI, as a TravisCI configuration file is also provided in the root directory.

## Authors

DataValues Validators has been written by the Wikidata team, as [Wikimedia Germany]
(https://wikimedia.de) employees for the [Wikidata project](https://wikidata.org/).

It is based upon and contains a lot of code written by [Jeroen De Dauw]
(https://github.com/JeroenDeDauw) for the [Maps](https://github.com/JeroenDeDauw/Maps) and
[Semantic MediaWiki](https://semantic-mediawiki.org/) projects.

## Release notes

### 0.1 (2013-11-17)

Initial release with these features:

* DimensionValidator
* ListValidator
* NullValidator
* RangeValidator
* StringValidator
* TitleValidator

## Links

* [DataValues Validators on Packagist](https://packagist.org/packages/data-values/validators)
* [DataValues Validators on TravisCI](https://travis-ci.org/DataValues/Validators)
