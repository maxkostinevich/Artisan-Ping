<?php

namespace MaxKostinevich\ArtisanPing\Tests;

use MaxKostinevich\ArtisanPing\ArtisanPingServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ArtisanPingServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
