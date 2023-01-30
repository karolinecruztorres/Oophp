<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pessoas 2</title>
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
    // require_once 'class/Pessoa.php';
    // require_once 'class/Aluno.php';
    // require_once 'class/Bolsista.php';
    // require_once 'class/Tecnico.php';
    // require_once 'class/Professor.php';
    // require_once 'class/Visitante.php';
    require('autoload.php');

    // $v1 = new Visitante();
    // $v1->setNome("Maria");
    // $v1->setIdade(35);
    // $v1->setGenero("F");
    // print_r($v1);

    $a1 = new Aluno();
    $a1->setNome("Pedro");
    $a1->setMatricula(1111);
    $a1->setIdade(16);
    $a1->setGenero("M");
    $a1->setCurso("Informática");
    print_r($a1);

    $b1 = new Bolsista();
    $b1->setNome("Carmen");
    $b1->setIdade(19);
    $b1->setBolsa(30);
    print_r($b1);
    $b1->pagarMensalidade();
    $a1->pagarMensalidade();

    $t1 = new Tecnico();
    $t1->setNome("Bruna");
    $t1->setIdade(37);
    $t1->setGenero("F");
    $t1->setRegProfissional(333);
    $t1->praticar();
    print_r($t1);


?>
</pre>
</body>
</html>