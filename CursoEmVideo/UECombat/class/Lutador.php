<?php
class Lutador{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso, $categoria;
    private $vitorias, $derrotas, $empates;

    //Método especial construct
    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi; 
        $this->derrotas = $de;
        $this->empates= $em;
    }

    //Métodos
    public function apresentar(){
        echo "<hr>";
        echo "<p>CHEGOU A HORA!</p>";
        echo "<p>O lutador ".$this->getNome();
        echo ", diretamente do(a/e) ".$this->getNacionalidade();
        echo ", tem ".$this->getIdade()." anos, pesa ".$this->getPeso()."Kg";
        echo " e tem ".$this->getAltura()."m de altura.</p>";
        echo "<p>Ele tem ".$this->getVitorias()." vitória(s), ".$this->getDerrotas();
        echo " derrota(s) e ".$this->getEmpates()." empate(s).</p>";
        echo "<hr>";
    }

    public function status(){
        echo "<hr>";
        echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
        echo " e já ganhou ".$this->getVitorias()." vez(es), ";
        echo "perdeu ".$this->getDerrotas()." vez(es) e ";
        echo "empatou ".$this->getEmpates()." vez(es).</p>";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Métodos especiais Getter e Setter
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria(){
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($empates){
        $this->empates = $empates;
    }
}
?>