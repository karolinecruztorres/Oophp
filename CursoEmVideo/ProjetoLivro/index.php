<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Livro</title>
</head>
<body>
<style>
    *{
        background: lightgray;
        font-size: 17px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>    
<pre>
<?php
    require_once 'class/Pessoa.php';
    require_once 'class/Livro.php';
    require_once 'class/Publicacao.php';

    $p = [];
    $p[0] = new Pessoa("Karoline", 27, "F");
    $p[1] = new Pessoa ("Carlos", 29, "M");

    $l[0] = new Livro("Fogo e Sangue", "George R. R. Martin", 800, $p[0]);
    $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
    $l[2] = new Livro("PHP Básico", "Ana Maria", 300, $p[1]);

    $l[0]->abrir();
    $l[0]->detalhes(); 
    $l[0]->folhear(544);
    print_r($l[0]->getPagAtual());
    echo "<br>";
    $l[0]->avancarPag();
    print_r($l[0]->getPagAtual());
    echo "<br>";
    $l[0]->voltarPag();
    $l[0]->detalhes();
    $l[0]->fechar();
    $l[0]->detalhes();

?>
</pre>
</body>
</html>