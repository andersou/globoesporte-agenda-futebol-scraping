<?php
require_once("vendor/autoload.php");
$jogos = [];
$data = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
for ($i = 0; $i < 5; $i++) {
    $dataFmt = $data->format(
        'd-m-Y'
    );
    echo $dataFmt . "\n";
    $jogos[$dataFmt] = GEScrapper\Query::get($dataFmt);
    $data->add(new DateInterval('P1D'));
}

print_r(json_encode($jogos, JSON_UNESCAPED_SLASHES /*| JSON_PRETTY_PRINT*/));
