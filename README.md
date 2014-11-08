UPSApiBundle
===========

A Symfony2 bundle to integrate with the UPS Api. This uses the [UPS-API] library. This is in active development right now.

[![Build Status](https://travis-ci.org/hautelook/AliceBundle.png?branch=master)](https://travis-ci.org/hautelook/AliceBundle)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/hautelook/AliceBundle/badges/quality-score.png?s=0b9ff0ac44085bc49fdb98f4ea1fec2fea918a39)](https://scrutinizer-ci.com/g/hautelook/AliceBundle/)
[![Code Coverage](https://scrutinizer-ci.com/g/hautelook/AliceBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/hautelook/AliceBundle/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/1169e133-3d02-4ba8-a87e-f152c620f8b5/mini.png)](https://insight.sensiolabs.com/projects/1169e133-3d02-4ba8-a87e-f152c620f8b5)

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
