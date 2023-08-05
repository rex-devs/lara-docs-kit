<?php

namespace RexDevs\LaraDocsKit\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use RexDevs\LaraDocsKit\LaraDocsKitServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaraDocsKitServiceProvider::class,
        ];
    }
}
