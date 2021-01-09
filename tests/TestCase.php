<?php

namespace MaxKostinevich\ArtisanPing\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use MaxKostinevich\ArtisanPing\ArtisanPingServiceProvider;

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
