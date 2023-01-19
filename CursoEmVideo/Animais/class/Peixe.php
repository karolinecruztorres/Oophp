<?php
require_once 'Animal.php';

class Peixe extends Animal {
    private $corEscama;
    
    public function soltarBolha(){
        echo "<br>Blob, blob, blob";
    }

    public function locomover(){
        echo "<br>Nadando";
    }
    public function alimentar(){
        echo "<br>Comendo substâncias";
    }
    public function emitirSom(){
        echo "<br>Peixe não faz som";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}