<?php


namespace Forseti\Bot\Login\Singleton;

use GuzzleHttp\Client;

class ClientSingleton
{
    use Singleton;

    private static function createInstance()
    {
        $config = [
            'debug' => false,
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
            ],
            'cookies' => true,
            'verify' => false,
        ];
        return new Client($config);
    }
}