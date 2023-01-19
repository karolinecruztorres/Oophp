<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Youtube</title>
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
    require_once 'class/Video.php';
    require_once 'class/Gafanhoto.php';
    require_once 'class/Visualizacao.php';
    
    $v[0] = new Video("Aula 1 de POO");
    $v[1] = new Video("Aula 12 de PHP");
    $v[2] = new Video("Aula 15 de HTML");

    $v[0]->play();
    $v[1]->pause();
    $v[2]->like();
    //print_r($v);

    $g[0] = new Gafanhoto("Karoline",27,"F","Karol123");
    //print_r($g);

    $vis[0] = new Visualizacao($g[0], $v[2]);
    print_r($vis);
?>
</pre>
</body>
</html>