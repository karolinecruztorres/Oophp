<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
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
    // require_once 'class/Mamifero.php';
    // require_once 'class/Reptil.php';
    // require_once 'class/Peixe.php';
    // require_once 'class/Ave.php';
    // require_once 'class/Canguru.php';
    // require_once 'class/Cachorro.php';
    // require_once 'class/Cobra.php';
    // require_once 'class/Tartaruga.php';
    // require_once 'class/PeixeDourado.php';
    // require_once 'class/Arara.php';
    require('autoload.php');

    $m = new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();

    $m->setPeso(15);
    $m->setIdade(2);
    $m->setMembros(4);
    $m->setCorPelo("Laranjado");
    //$m->locomover();
    //$m->alimentar();
    //$m->emitirSom();

    $r->setPeso(1.4);
    $r->setIdade(3);
    $r->setMembros(4);
    $r->setCorEscama("Verde");
    //$r->locomover();
    //$r->alimentar();

    $p->setPeso(0.7);
    $p->setIdade(1);
    $p->setMembros(3);
    $p->setCorEscama("Vermelho");
    //$p->locomover();
    //$p->emitirSom();
    //$p->soltarBolha();

    $a->setPeso(3);
    $a->setIdade(5);
    $a->setMembros(2);
    $a->setCorPena("Preto");
    //$a->alimentar();
    //$a->emitirSom();
    //$a->fazerNinho();

    print_r($m);
    print_r($r);
    print_r($p);
    print_r($a);

    $cang = new Canguru();
    $cach = new Cachorro();
    $cobr = new Cobra();
    $tart = new Tartaruga();
    $doura = new PeixeDourado();
    $ara = new Arara();

    $cang->setPeso(50);
    $cang->setIdade(6);
    $cang->setMembros(4);
    $cang->setCorPelo("Castanho");
    $cang->locomover();
    $cang->alimentar();
    $cang->emitirSom();
    $cang->usarBolsa();

    $cach->enterrarOsso();
    $cach->abanarRabo();
    $cach->emitirSom();
    $cobr->locomover();
    $tart->locomover();
    $doura->soltarBolha();
    $ara->fazerNinho();

    //print_r($cang);
    //print_r($cach);
    //print_r($cobr);
    //print_r($tart);
    //print_r($doura);
    //print_r($ara);
?>
</pre>
</body>
</html>