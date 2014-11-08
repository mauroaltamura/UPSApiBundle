UPSApiBundle
============

A Symfony2 bundle to integrate with the UPS Api. This uses the [UPS-API][ups-library] library. This is in active development right now.

[![Build Status](https://travis-ci.org/hautelook/UPSApiBundle.svg?branch=master)](https://travis-ci.org/hautelook/UPSApiBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hautelook/UPSApiBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/hautelook/UPSApiBundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/hautelook/UPSApiBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/hautelook/UPSApiBundle/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/05b785ff-8630-4682-9896-70346897bc24/big.png)](https://insight.sensiolabs.com/projects/05b785ff-8630-4682-9896-70346897bc24)

## Introduction

To use this bundle you need to [sign up][ups-dev-key] on the UPS developers website for a new UPS Api Key

## Installation

Simply run assuming you have installed composer.phar or composer binary (or add to your `composer.json` and run composer
install:

```bash
$ composer require hautelook/ups-api-bundle
```

You can follow `dev-master`, or use a more stable tag (recommended for various reasons). On the
[Github repository](https://github.com/hautelook/UPSApiBundle), or on [Packagist](http://www.packagist.org), you can
always find the latest tag.

Now add the Bundle to your Kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Hautelook\UPSApiBundle\HautelookUPSApiBundle(),
        // ...
    );
}
```

## Configuration

You can configure the bundle like so:

```yaml
# app/config/config.yml

hautelook_ups_api:
    # Add configuration here
```

## Usage

Add usage information...

[ups-library]: https://github.com/gabrielbull/php-ups-api
[ups-dev-key]: https://www.ups.com/upsdeveloperkit
