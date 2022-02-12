<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Singleton\ClientSingleton;
use Forseti\Bot\Login\Traits\ForsetiLoggerTrait;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct()
    {
        $this->client = ClientSingleton::getInstance();
    }

    abstract public function getResponse() : Response;

    public function getHtml()
    {
        return $this->getResponse()->getBody()->getContents();
    }

    public function request($method, $uri, array $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (GuzzleException $e) {
            $this->error('Erro ao tentar requisicao', ['exception' => $e->getMessage()]);
            return null;
        }
    }
}
