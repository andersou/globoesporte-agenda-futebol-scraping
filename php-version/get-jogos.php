<?php
require_once("vendor/autoload.php");
require_once(__DIR__ . "/helpers.php");

function get($data = "hoje")
{
    $html = Pharse::file_get_dom("https://globoesporte.globo.com/placar-ge/{$data}/jogos.ghtml");
    return GEScrapper\Parser::parse($html);
}

$jogos[] = get(date("d-m-Y"));
print_r(json_encode($jogos, JSON_UNESCAPED_SLASHES));
