<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
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
    require_once 'class/ControleRemoto.php';
    $c = new ControleRemoto();
    $c->ligar();
    $c->abrirMenu();
    $c->fecharMenu();
    $c->menosVolume();
    $c->abrirMenu();
    $c->ligarMudo();
    $c->abrirMenu();
    $c->maisVolume();
    $c->abrirMenu();
    $c->play();
    $c->abrirMenu();
    $c->pause();
    $c->abrirMenu();
    $c->menosVolume();
    $c->abrirMenu();
    $c->desligarMudo();
    $c->abrirMenu();
    $c->desligar();
    $c->abrirMenu();
?>
</pre>
</body>
</html>