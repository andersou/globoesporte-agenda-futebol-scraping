<?php
require_once("vendor/autoload.php");
require_once(__DIR__ . "/helpers.php");

function get($data = "hoje")
{
    $html = Pharse::file_get_dom("https://globoesporte.globo.com/placar-ge/{$data}/jogos.ghtml");
    return GEScrapper\Parser::parse($html);
}
$data = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
$data->add(new DateInterval('P1D'));
$jogos[] = get($data->format('d-m-Y'));
print_r(json_encode($jogos, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
