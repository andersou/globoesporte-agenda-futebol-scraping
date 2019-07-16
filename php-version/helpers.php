<?php
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

function HtmlNodeMapAttribute($attr){
    return function ($node) use ($attr){
        return $node->getAttribute($attr);
    };
}