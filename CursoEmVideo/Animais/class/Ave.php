<?php
require_once 'Animal.php';

class Ave extends Animal {
    private $corPena;

    public function fazerNinho(){
        echo "<br>Construindo um ninho";
    }

    public function locomover(){
        echo "<br>Voando";
    }
    public function alimentar(){
        echo "<br>Comendo insetos";
    }
    public function emitirSom(){
        echo "<br>Som de ave";
    }

    public function getCorPena() {
        return $this->corPena;
    }
    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}