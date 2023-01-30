<?php
//Não é necessário instanciar a classe para utilizar a constante dentro da mesma. Uma constante pode ter qualquer visibilidade (public, protected, private)
class Exemplo1 {
    public const nomeConstante = "Sou constante";
}
// $exemplo = new Exemplo();
// echo $exemplo::nomeConstante;

echo Exemplo1::nomeConstante;
echo "<br>";

//É possível pegar a const via método
class Exemplo2 {
    protected const nomeConstante2 = "Também sou constante";

    function teste(){
        echo self::nomeConstante2;
    }
}

$exemplo = new Exemplo2();
$exemplo->teste(); 
echo "<br>";