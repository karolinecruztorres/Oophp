<?php
require_once 'Mamifero.php';

class Cachorro extends Mamifero {
    public function enterrarOsso(){
        echo "<br>Enterrando osso";
    }

    public function abanarRabo(){
        echo "<br>Abanando o rabo";
    }

    public function emitirSom(){
        echo "<br>Au au au";
    }     
}