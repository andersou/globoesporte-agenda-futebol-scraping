<?php

namespace GEScrapper;

use ParseError;

class Query
{

    public static function get($data = "hoje", $parse = true)
    {
        $data = $data == "hoje" ? ((new DateTime('now', new DateTimeZone('America/Sao_Paulo')))->format('d-m-Y')) : $data;
        $html = \Pharse::file_get_dom("https://globoesporte.globo.com/placar-ge/{$data}/jogos.ghtml");
        return $parse ? Parser::parse($html, $data) : $html;
    }
}
