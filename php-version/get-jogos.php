<?php
require_once("vendor/autoload.php");
use PHPHtmlParser\Dom;
$html = Pharse::file_get_dom('https://globoesporte.globo.com/placar-ge/hoje/jogos.ghtml'); 
$jogos = $html('.resultado-time-container');
foreach($jogos as $jogo){
    $times = $jogo('.nome-completo');
    $placar = $jogo('.placar');
    if(count($placar)>1){
        echo(" {$times[0]->getPlainText()} {$placar[0]->getPlainText()} x {$placar[1]->getPlainText()} {$times[1]->getPlainText()} \n");
    }else{
        echo(" {$times[0]->getPlainText()} x {$times[1]->getPlainText()} \n");

    }
} 