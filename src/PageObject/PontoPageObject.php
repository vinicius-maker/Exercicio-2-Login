<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Bean\PontoBean;
use Forseti\Bot\Login\Enums\Url;
use Forseti\Bot\Login\Parser\PontoParser;
use GuzzleHttp\Psr7\Response;

class PontoPageObject extends AbstractPageObject
{
    use PontoBean;

    public function getResponse() : Response
    {
        return $this->client->request('POST', Url::LOGIN,
            [
                'form_params' => [
                    '_token' => (new TokenPageObject())->getParser()->getToken() ,
                    'email' => $this->usuario ,
                    'password' => $this->senha
                ]
            ]
        );
    }

    public function getParser()
    {
        return new PontoParser($this->getHtml());
    }
}
