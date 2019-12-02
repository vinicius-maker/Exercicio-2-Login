<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Traits\ForsetiLoggerTrait;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct()
    {
        $this->client = new Client(['cookies' => true]);
    }

    abstract public function getResposta();

    public function getHtml()
    {
        return $this->getResposta()->getBody()->getContents();
    }

    public function request($method, $uri, array $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (GuzzleException $e) {
            $this->error('Erro ao tentar requisicao', ['exception' => $e]);
            return null;
        } catch (\Exception $e) {
            $this->error('Erro ao tentar requisicao', ['exception' => $e]);
            return null;
        }
    }

}
