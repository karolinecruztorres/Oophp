<?php
require_once 'Animal.php';

class Mamifero extends Animal {
    private $corPelo;

    public function locomover(){
        echo "<br>Correndo";
    }
    public function alimentar(){
        echo "<br>Mamando";
    }
    public function emitirSom(){
        echo "<br>Som de mamífero";
    }
     
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}