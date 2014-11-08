UPSApiBundle
===========

A Symfony2 bundle to integrate with the UPS Api. This uses the [UPS-API] library. This is in active development right now.

[![Build Status](https://travis-ci.org/hautelook/UPSApiBundle.svg?branch=master)](https://travis-ci.org/hautelook/UPSApiBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hautelook/UPSApiBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/hautelook/UPSApiBundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/hautelook/UPSApiBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/hautelook/UPSApiBundle/?branch=master)

## Introduction

To use this bundle you need to create a new UPS Api Key at: ...

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

Add usage information
