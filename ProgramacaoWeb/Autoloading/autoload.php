<?php
//Possibilita o carregamento de todas as classes de um diretório específico
function loadClass($nomeClasse){
    $pasta = __DIR__ . '/class/' . $nomeClasse . '.php';
    if (is_file($pasta)) {
        require($pasta);
    }
}

spl_autoload_register('loadClass');