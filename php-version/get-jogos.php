<?php
require_once("vendor/autoload.php");
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->loadFromUrl('https://globoesporte.globo.com/placar-ge/hoje/jogos.ghtml');
$jogos = $dom->find('.resultado-time-container');
foreach($jogos as $jogo){
    $times = $jogo->find('.nome-completo');
    $placar = $jogo->find('.placar');
    if(count($placar)>1){
        echo(" {$times[0]->text} {$placar[0]->text} x {$placar[1]->text} {$times[1]->text} \n");
    }else{
        echo(" {$times[0]->text} x {$times[1]->text} \n");

    }
}