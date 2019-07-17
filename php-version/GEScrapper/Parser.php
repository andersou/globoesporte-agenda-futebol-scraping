<?php

namespace GEScrapper;


require_once(__DIR__ . "/../helpers.php");

class Parser
{

    public static function parse($html)
    {
        $jogosParse = [];
        $secoes = $html('.secao-horario');
        foreach ($secoes as $secao) {
            $jogos = $secao('.card-jogo');
            $secaoAtual = getSecaoAtual($secao);
            foreach ($jogos as $jogo) {
                $competicao = $jogo('.titulo span')[0]->getPlainText();
                $hora = $jogo('.titulo time')[0]->getPlainText();

                $nomes = array_map('htmlNodeMapText', $jogo('.nome-completo'));
                $apelidos = array_map('htmlNodeMapText', $jogo('.nome-abreviado'));
                $escudos = array_map(HtmlNodeMapAttribute('src'), $jogo('.escudo'));
                $placares = array_map('htmlNodeMapText', $jogo('.placar'));
                if (count($nomes) != 2) continue;

                $time_casa = new Models\Time($nomes[0], $apelidos[0], $escudos[0]);
                $time_visitante = new Models\Time($nomes[1], $apelidos[1], $escudos[1]);

                if (count($placares) == 2) {

                    $jogosParse[] = new Models\Jogo($time_casa, $time_visitante, $hora, $competicao, $placares[0], $placares[1], $secaoAtual);
                } else {
                    $jogosParse[] = new Models\Jogo($time_casa, $time_visitante, $hora, $competicao);
                    $placares = ['', ''];
                }
                //echo ("$competicao \n[$secaoAtual | $hora] > {$nomes[0]} {$placares[0]} x {$placares[1]} {$nomes[1]} \n\n");
            }
        }
        //var_dump($jogosParse);
        return $jogosParse;
    }
}
