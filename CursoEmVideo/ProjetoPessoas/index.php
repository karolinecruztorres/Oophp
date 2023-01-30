<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Pessoas</title>
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
    // require_once 'class/Professor.php';
    // require_once 'class/Funcionario.php';
    require('autoload.php');

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Pedro"); 
    $p2->setNome("Maria"); 
    $p3->setNome("Cláudio"); 
    $p4->setNome("Fabiana"); 

    $p1->setGenero("M");
    $p2->setGenero("F");
    $p2->setCurso("Informática");
    $p3->setSalario(2500.75);
    $p4->setSetor("Estoque");

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
?>
</pre>
</body>
</html>