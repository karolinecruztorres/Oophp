<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "cc") {
            $this->setSaldo(50);
        } elseif ($t == "cp"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, impossível encerrar.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em débito, impossível encerrar.</p>";
        } else{
            $this->setStatus(false);
            echo "<p>Conta de ".$this->getDono()." fechada com sucesso.</p>";
        }
    }

    public function depositar($v){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$ $v autorizado na conta de ".$this->getDono()."</p>";
        } else {
            echo "<p>Ainda não tem conta no banco, impossível depositar.</p>";
        }
    }

    public function sacar($v){
        if ($this->getStatus()) {
            if($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de ".$this->getDono().".</p>";
            }else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Ainda não tem conta no banco, impossível sacar.<p>";
        }
    }
    
    public function pagarMensal(){
        if ($this->getTipo() == "cc") {
            $v = 12;
        } elseif ($this->getTipo() == "cp") {
            $v = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada da conta de ".$this->getDono().".</p>";
        } else {
            echo "<p>Ainda não tem conta no banco.<p>";
        }
    }   

    /**
     * Get the value of numConta
     */ 
    public function getNumConta()
    {
        return $this->numConta;
    }

    /**
     * Set the value of numConta
     *
     * @return  self
     */ 
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * Get the value of dono
     */ 
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * Set the value of dono
     *
     * @return  self
     */ 
    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
?>