<?php

namespace Forseti\Bot\Login\Parser;

use Forseti\Bot\Login\Iterator\TabelaIterator;

class TabelaParser extends AbstractParser
{
    public function getIterator()
    {
        $tabela = $this->crawler->filterXPath('//*[@id="app"]/main/div[1]/div/div/table/tbody/tr');
        return new TabelaIterator($tabela);
    }

}


