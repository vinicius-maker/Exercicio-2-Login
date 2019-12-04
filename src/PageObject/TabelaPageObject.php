<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Bean\TabelaBean;
use Forseti\Bot\Login\Enums\Url;
use Forseti\Bot\Login\Parser\TabelaParser;
use GuzzleHttp\Psr7\Response;

class TabelaPageObject extends AbstractPageObject
{
    use TabelaBean;

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
        return new TabelaParser($this->getHtml());
    }


}