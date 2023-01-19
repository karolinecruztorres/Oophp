<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Método Construct
    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    //Métodos
    public function detalhes() {
        echo "<p>Livro '".$this->titulo."' escrito por ".$this->autor.".</p>";
        echo "<p>Está sendo lido por ".$this->leitor->getNome().".</p>";
        echo "<p>Contém ".$this->totPaginas." páginas e a página atual é ".$this->pagAtual.".</p>";
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function fechar() {
        $this->aberto = false;
        $this->pagAtual = 0;
    }

    public function folhear($p) {
        if ($this->totPaginas >= $p) {
            $this->pagAtual = $p;
        }else{
            $this->pagAtual = 0;
        }
    }  

    public function avancarPag() {
        do {
            $this->pagAtual ++ ;
        } while ($this->pagAtual === $this->totPaginas);
    }

    public function voltarPag() {
        do {
            $this->pagAtual -- ;
        } while ($this->pagAtual === 1);
    }
    
    //Métodos get e set
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){ 
        $this->autor = $autor;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }
}
?>