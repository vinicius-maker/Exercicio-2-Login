<?php

namespace Forseti\Bot\Login\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    public function __construct($tituloPageObject)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($tituloPageObject);
    }
}