<?php
require_once 'Aluno.php';

class Tecnico extends Aluno{
    private $regProfissional;

    public function praticar(){
        echo "<p>Estou praticando</p>";
    }
 
    public function getRegProfissional() {
        return $this->regProfissional;
    }
    public function setRegProfissional($regProfissional) {
        $this->regProfissional = $regProfissional;
    }
}

?>