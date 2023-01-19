<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $genero, $login){
        parent::__construct($nome, $idade, $genero); 
        $this->login = $login;
        $this->getTotAssistido = 0;
    }

    public function viuMaisUm(){
        $this->getTotAssistido ++;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;
    }
}