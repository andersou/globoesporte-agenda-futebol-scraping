<?php

namespace GEScrapper;

use ParseError;

class Query
{

    public static function get($data = "hoje", $parse = true)
    {
        $html = \Pharse::file_get_dom("https://globoesporte.globo.com/placar-ge/{$data}/jogos.ghtml");
        return $parse ? Parser::parse($html) : $html;
    }
}
