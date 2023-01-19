<?php
require_once 'Lutador.php';

class Luta {
    //Atributos
    private $desafiado; 
    private $desafiante;
    private $rounds;    
    private $aprovada;  

    //Métodos
    public function marcarLuta($l1, $l2) { 
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar() {
        if ($this->aprovada) {
            echo "<p>".$this->desafiado->apresentar()."</p>";
            echo "<p>".$this->desafiante->apresentar()."</p>";
            $chances = [0,0,1,1,1,1,2,2,2,2];
            $comparar = ['getVitorias', 'getAltura']; //?

            foreach ($comparar as $key => $value) {
               if($this->desafiado->$value() > $this->desafiante->$value()) {
                    array_push($chances, 1);
                }elseif ($this->desafiado->$value() < $this->desafiante->$value()) {
                    array_push($chances, 2);
                }else{
                    array_push($chances, 0);
            } 
            }
          
            $vencedor = $chances[rand(0,count($chances)-1)]; //?
            switch ($vencedor) {
                case 0:
                    echo "<p><strong>Empate!</strong></p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p><strong>".$this->desafiado->getNome()." venceu!</strong></p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p><strong>".$this->desafiante->getNome()." venceu!</strong></p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer.</p>";
        }
        
    }

    //Métodos especias Getter e Setter
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    public function getRounds() {
        return $this->rounds;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    public function getAprovada() {
        return $this->aprovada;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
}
?>