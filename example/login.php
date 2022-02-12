<?php
namespace Forseti\Bot\Login;

use Forseti\Bot\Login\PageObject\PontoPageObject;

require __DIR__.'/../vendor/autoload.php';

$infoPonto = new PontoPageObject();
$infoPonto
    ->setUsuario('')
    ->setSenha('')
    ->getResponse();

$info = $infoPonto->getParser()->getIterator()->current();

echo "Inicio do expediente: " . $info->inicio . PHP_EOL;
echo "Saida para o intervalo: " . $info->intervalo . PHP_EOL;
echo "Volta do intervalo: " . $info->voltaIntervalo . PHP_EOL;
echo "Final do expediente: " . $info->saida . PHP_EOL;
