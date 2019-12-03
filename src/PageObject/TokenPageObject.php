<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Parser\TokenParser;
use GuzzleHttp\Psr7\Response;

class TokenPageObject extends AbstractPageObject
{
     public function getResponse() : Response
    {
        $this->info('Capturando token');
        $response = $this->request(
            'GET',
            'http://192.168.1.98:81/panel'
        );
        return $response;
    }

    public function getHtml()
    {
        return $this->getResponse()->getBody()->getContents();
    }

    public function getParser()
    {
        return new TokenParser($this->getHtml());
    }


  /*  public function getResponse() :
    {
        // TODO: Implement getResposta() method.
    }*/
}