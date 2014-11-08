<?php

namespace Hautelook\UPSApiBundle\Tests\Functional;

use Hautelook\UPSApiBundle\Tests\Functional\TestBundle\TestBundle;
use Hautelook\UPSApiBundle\HautelookUPSApiBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return array(
            new FrameworkBundle(),
            new HautelookUPSApiBundle(),

            new TestBundle(),
        );
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/UPSApiBundle/';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
