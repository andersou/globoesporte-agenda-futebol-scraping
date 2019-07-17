<?php

namespace GEScrapper\Models;

use JsonSerializable;

class Time implements JsonSerializable
{
    public $nome, $apelido, $escudo;
    public function __construct($nome, $apelido, $escudo)
    {
        $this->nome = $nome;
        $this->apelido = $apelido;
        $this->escudo = $escudo;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
