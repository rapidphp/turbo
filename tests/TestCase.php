<?php

namespace Rapid\Turbo\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            ...parent::getPackageProviders($app),
            ThunderServiceProvider::class,
        ];
    }

}