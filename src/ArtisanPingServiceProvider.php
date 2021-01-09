<?php

namespace MaxKostinevich\ArtisanPing;

use Illuminate\Support\ServiceProvider;
use MaxKostinevich\ArtisanPing\Commands\ArtisanPingCommand;

class ArtisanPingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ArtisanPingCommand::class,
            ]);
        }
    }

    public function register()
    {
    }
}
