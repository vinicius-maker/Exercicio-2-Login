<?php

namespace Forseti\Bot\Login\Parser;

use Forseti\Bot\Login\Iterator\PontoIterator;

class PontoParser extends AbstractParser
{
    public function getIterator()
    {
        $tabela = $this->crawler->filterXPath('//*[@id="app"]/main/div[1]/div/div/table/tbody/tr');
        return new PontoIterator($tabela);
    }
}
