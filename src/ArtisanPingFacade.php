<?php

namespace MaxKostinevich\ArtisanPing;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MaxKostinevich\ArtisanPing\ArtisanPing
 */
class ArtisanPingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'artisan-ping';
    }
}
