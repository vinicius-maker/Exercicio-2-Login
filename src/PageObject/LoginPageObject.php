<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Parser\TituloParser;

class LoginPageObject extends AbstractPageObject
{
    private $usuario;
    private $senha;

    public function getResposta()
    {
        $this->info('Buscando Pagina de Login');
        return $this->request('GET', 'http://192.168.1.98:81/login');
    }

    public function postLogar()
    {
        return $this->client->request('POST', 'http://192.168.1.98:81/login',
            [
                'form_params' => [
                    '_token' => $this->getParser()->getToken() ,
                    'email' => $this->usuario ,
                    'password' => $this->senha
                ]
            ]
        );
    }

    public function getParser()
    {
        return new TituloParser($this->getHtml());
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

}