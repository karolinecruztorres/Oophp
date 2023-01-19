<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combate UEC</title>
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
    require_once 'class/Lutador.php';
    require_once 'class/Luta.php';
    $l = array();
    $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
    $l[6] = new Lutador("Matildo", "Argentina", 27, 1.75, 79.5, 10, 3, 1);
    $l[7] = new Lutador("Abdul", "Gana", 32, 1.93, 120.1, 15, 0, 4);
    $l[8] = new Lutador("Clemens", "Alemanha", 34, 1.69, 53.7, 11, 5, 2);

    // $l[3]->perderLuta();
    // $l[3]->status();
    // $l[3]->apresentar();
    // $l[5]->status();
    // $l[5]->apresentar();

    $UEC01 = new Luta();
    $UEC01->marcarLuta($l[8], $l[1]);
    $UEC01->lutar();
    $l[8]->status();
    $l[1]->status();
   
?>
</pre>
</body>
</html>