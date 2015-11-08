# Doctrine ODM MongoDB adapter for Jiffy Universal Timestamps


[![Author](http://img.shields.io/badge/author-@castarco-blue.svg?style=flat-square)](https://twitter.com/castarco)
[![Quality Score](https://img.shields.io/scrutinizer/g/litipk/doctrine-mongodb-jiffy.svg?style=flat-square)](https://scrutinizer-ci.com/g/litipk/doctrine-mongodb-jiffy)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/Litipk/doctrine-mongodb-jiffy.svg?style=flat-square)](https://packagist.org/packages/Litipk/doctrine-mongodb-jiffy)
[![Total Downloads](https://img.shields.io/packagist/dt/litipk/doctrine-mongodb-jiffy.svg?style=flat-square)](https://packagist.org/packages/litipk/doctrine-mongodb-jiffy)

## About the library

PHP does not offer any native class to implement timestamps with milliseconds or microseconds precision, the only
"native" way to do it is working with the weird `microtime` function and/or the `\MongoDate` class.

This library provides a Doctrine ODM type to make possible using the PHP-Jiffy's UniversalTimestamp objects in our
Doctrine ODM models. It's very useful if you need to deal with very precise timestamps but you don't want to couple your
code with the `\MongoDate` class without giving up on type hinting.

## Installation

```bash
composer require litipk/doctrine-mongodb-jiffy
```

## Usage

To use this type there are three steps:

1. Install the library through Composer.
2. Register the type in your application, if you are using Symfony, the Bundle constructor is a good place to do it. 
    ```php
    
    Type::registerType(
        'UniversalTimestamp',
        'Litipk\Jiffy\Doctrine\ODM\MongoDB\UniversalTimestampType'
    );
    
    ```
3. Use the type in your models with the `@UniversalTimestampField` annotation.
    ```php
    use Litipk\Jiffy\Doctrine\ODM\MongoDB\UniversalTimestampField;
    
    class OurDocument
    {
        /**
         * @UniversalTimestampField()
         * @var UniversalTimestamp
         */
        private $creationDate;
        
        // [...]
    }
    ```
