<?php
//Possibilita o carregamento de todas as classes de um diretório específico, utilizando str_replace para rodar no linux quando houver caminhos que contenham "\".
function loadClass($nomeClasse){
    $pasta = __DIR__ . '/class/' . $nomeClasse . '.php';
    $caminhoCompleto = str_replace("\\", DIRECTORY_SEPARATOR, $pasta);
    if (is_file($caminhoCompleto)) {
        require_once($caminhoCompleto);
    }
}

spl_autoload_register('loadClass');