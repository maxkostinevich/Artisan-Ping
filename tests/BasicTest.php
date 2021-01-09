<?php

namespace MaxKostinevich\ArtisanPing\Tests;

class BasicTest extends TestCase
{
    /** @test */
    public function http_call_is_working()
    {
        $this->artisan('ping:http', [
            '--url' => 'https://example.com',
            '--method' => 'get',
        ])
            ->expectsOutput('Request completed successfully (Code: 200)')
            ->assertExitCode(0);
    }
}
