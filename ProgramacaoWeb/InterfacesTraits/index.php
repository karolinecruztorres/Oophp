<?php
//Interfaces não podem ter propriedades, só métodos(todos devem ser públicos);
//Trait(característica) = quando uma função será compartilhada entre várias classes, mesmo que eles não tenham herança entre si, utiliza-se trait. É chamado com "use".

trait ExposicaoSolar
{
    function exposicaoSolar()
    {
        echo "Estou me expondo ao sol <br>";
    }
}

class Humano {
    use ExposicaoSolar;
}

class Planta {
    use ExposicaoSolar;
}

class Animal {
    use ExposicaoSolar;
}

//Essas classes não tem características suficientes para terem herança entre si, logo, não utilizamos interface ou classe abstrata, mas sim trait. 

$hum = new Humano();
$hum->exposicaoSolar(); 

$pla = new Planta();
$pla->exposicaoSolar(); 

$ani = new Animal();
$ani->exposicaoSolar(); 