<?php
require_once("vendor/autoload.php");
use PHPHtmlParser\Dom;
$html = Pharse::file_get_dom('https://globoesporte.globo.com/placar-ge/hoje/jogos.ghtml'); 
//itera secoes
//itera jogos
//pega valores
function getSecaoAtual($secao){
    foreach (['passado', 'ao-vivo', 'futuro'] as $atual) {
        if(stripos($secao->getAttribute('class'),$atual) != false){
            return $atual;
        }
    }
}
function htmlNodeMapText($node){
    return $node->getPlainText();
}


$secoes = $html('.secao-horario');
foreach ($secoes as $secao ) {
    $secaoAtual = getSecaoAtual($secao);
    $jogos = $secao('.card-jogo');
    foreach ($jogos as $jogo ) {
        $competicao = $jogo('.titulo span')[0]->getPlainText();
        $hora = $jogo('.titulo time')[0]->getPlainText();
        
        $nomes = array_map('htmlNodeMapText', $jogo('.nome-completo'));
        $apelidos = array_map('htmlNodeMapText', $jogo('.nome-abreviado'));
        $escudos = array_map('htmlNodeMapText', $jogo('.escudo'));
        $placares = array_map('htmlNodeMapText', $jogo('.placar'));
        if(count($nomes) != 2) continue;
        echo("$competicao [$secaoAtual | $hora] > {$nomes[0]} {$nomes[1]} {$escudos[0]} {$escudos[1]}\n");
    
    }
}
