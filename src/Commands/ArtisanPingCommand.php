<?php

namespace MaxKostinevich\ArtisanPing\Commands;

use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ArtisanPingCommand extends Command
{
    public $signature = 'ping:http
                        {--url= : The URL to make the request to}
                        {--method=POST : Request method (post, get, delete, patch)}
                        {--headers=* : Headers}
                        {--data=* : Data}
                        {--timeout=5 : Timeout}
                        {--retry=1 : Retry}
                        {--queue : Whether the job should be queued}';

    public $description = 'Make HTTP requests from command-line';

    public function handle()
    {
        $method = $this->option('method');
        $url = $this->option('url');
        $retry = $this->option('retry');
        $timeout = $this->option('timeout');
        $headers = $this->option('headers');
        $data = $this->option('data');

        if ($this->option('queue')) {

            $this->info('Command called and pushed to queue');
            Artisan::queue('ping:http', [
                '--url' => $url,
                '--method' => $method,
                '--retry' => $retry,
                '--timeout' => $timeout,
                '--headers' => $headers,
                '--data' => $data
            ]);
            return true;
        }

        $body = [];
        foreach ($data as $key) {
            $tmp = explode('=', $key);
            $body[$tmp[0]] = $tmp[1];
        }
        $header = [];
        foreach ($headers as $key) {
            $tmp = explode('=', $key);
            $header[$tmp[0]] = $tmp[1];
        }
        try {
            $this->comment('Making a ' . $method . ' request to ' . $url);
            $response = Http::retry($retry, 5)->timeout($timeout)->withHeaders($header)->{$method}($url, $body)->throw()->status();
            $this->info('Request completed successfully (Code: ' . $response . ')');
        } catch (Exception $e) {
            $this->error('Error while making request to ' . $url . ' (Error code ' . $e->getCode() . ')');
        }
    }
}
