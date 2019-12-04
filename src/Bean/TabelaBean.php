<?php


namespace Forseti\Bot\Login\Bean;


trait TabelaBean
{
    private $usuario;
    private $senha;

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