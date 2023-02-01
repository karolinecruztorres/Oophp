<?php
//STATIC FUNCTION
//Quando uma função recebe "static", ela não precisa ser instanciada para rodar. Podem ser herdados.
class Estatico {
    public static function ola(){
        echo "Olá, mundo! <br>";
    }

    function teste(){
        //equivalente ao "$this->", mas para static
        self::ola();
    }
}

class Filho extends Estatico{
    function herda(){
        parent::ola();
    }
}

class Aleatoria {
    function qualquer(){
        Estatico::ola();
    }
}

//Maneira correta de chamar a function
Estatico::ola();

$teste = new Estatico();
$teste->teste();

$filho = new Filho();
$filho->herda();

$aleatorio = new Aleatoria();
$aleatorio->qualquer();


//STATIC ATRIBUTES
//Necessário começar com um valor inicial
class Atributos{
    static $idade=20;

    function qualIdade(){
        echo "<br>".self::$idade;
    }
}

class Filho2 extends Atributos{
    function herdou(){
        echo "<br>".parent::$idade;
    }
}

echo Atributos::$idade;

$anos = new Atributos();
$anos->qualIdade();

$filho2 = new Filho2();
$filho2->herdou();