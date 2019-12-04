<?php
namespace Forseti\Bot\Login;

use Forseti\Bot\Login\PageObject\TabelaPageObject;

require __DIR__.'/../vendor/autoload.php';

$tabelaPageObject = new TabelaPageObject();
$tabelaPageObject
    ->setUsuario('vinicius.viana@forseti.com.br')
    ->setSenha('forseti2408')
    ->getResponse();

$info = $tabelaPageObject->getParser()->getIterator()->current();

var_dump($info);

//
//echo "Inicio do expediente: " . $info->inicio . PHP_EOL;
//echo "Saida para o intervalo: " . $info->intervalo . PHP_EOL;
//echo "Volta do intervalo: " . $info->voltaIntervalo . PHP_EOL;
//echo "Final do expediente: " . $info->saida . PHP_EOL;
