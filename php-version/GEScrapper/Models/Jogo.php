<?php

namespace GEScrapper\Models;

use JsonSerializable;

class Jogo implements JsonSerializable
{
    public $time_casa, $time_visitante, $horario, $competicao, $estado, $gols_casa, $gols_visitante;

    public function __construct(Time $time_casa, Time $time_visitante, $horario, $competicao, int $gols_casa = 0, int $gols_visitante = 0, $estado = "futuro")
    {
        $this->time_casa = $time_casa;
        $this->time_visitante = $time_visitante;
        $this->horario = $horario;
        $this->competicao = $competicao;
        $this->gols_casa = $gols_casa;
        $this->gols_visitante = $gols_visitante;
        $this->estado = $estado;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
