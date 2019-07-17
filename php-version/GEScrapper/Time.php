<?php

namespace GEScrapper;

class Time
{
    public $nome, $apelido, $escudo;
    public function __construct($nome, $apelido, $escudo)
    {
        $this->nome = $nome;
        $this->apelido = $apelido;
        $this->escudo = $escudo;
    }
}
