<?php

namespace Forseti\Bot\Login\Parser;

use Forseti\Bot\Login\Iterator\TituloIterator;

class TituloParser extends AbstractParser
{
    public function getToken()
    {
        return $this->crawler->filter('#app > main > div > div > div > div > div.card-body > form > input[type=hidden]')->attr('value');
    }

    public function getIterator()
    {
        $tabela = $this->crawler->filterXPath('//*[@id="app"]/main/div[1]/div/div/table/tbody/tr');
        return new TituloIterator($tabela);
    }

}


