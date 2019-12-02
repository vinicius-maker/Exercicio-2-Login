<?php
namespace Forseti\Bot\Login;

use Forseti\Bot\Login\PageObject\LoginPageObject;

require __DIR__.'/../vendor/autoload.php';

$loginPageObject = new LoginPageObject();
$loginPageObject->setUsuario('vinicius.viana@forseti.com.br')->setSenha('forseti2408')->postLogar();

$info = $loginPageObject->getParser()->getIterator()->current();

echo "Inicio do expediente: " . $info->inicio . PHP_EOL;
echo "Saida para o intervalo: " . $info->intervalo . PHP_EOL;
echo "Volta do intervalo: " . $info->voltaIntervalo . PHP_EOL;
echo "Final do expediente: " . $info->saida . PHP_EOL;
