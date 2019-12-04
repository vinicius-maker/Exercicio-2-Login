<?php

namespace Forseti\Bot\Login\Parser;

use Forseti\Bot\Login\Regex\TabelaRegex;

class TokenParser extends AbstractParser
{
    public function getToken()
    {
        return $this->crawler->filter('#app > main > div > div > div > div > div.card-body > form > input[type=hidden]')->attr('value');
    }
}