<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
    }

    public function avaliar(){

    }
    public function avaliarNota($nota){

    }
    public function avaliarPorcen($porcen){
        
    }

    public function getEspectador()
    {
        return $this->espectador;
    }
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }
    public function getFilme()
    {
        return $this->filme;
    }
    public function setFilme($filme)
    {
        $this->filme = $filme;
    }
}