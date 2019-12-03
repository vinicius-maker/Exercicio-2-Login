<?php

require_once __DIR__.'/../vendor/autoload.php';

use Forseti\Bot\Login\PageObject\TokenPageObject;

$tokenPageObject = new TokenPageObject();
var_dump($tokenPageObject->getParser()->getToken());

///home/vinicius-viana/Área de Trabalho/denovo/exercicio-2/src/Singleton