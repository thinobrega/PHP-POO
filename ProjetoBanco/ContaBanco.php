<?php

class ContaBanco {

    //===============================================
    //atributos
    //===============================================
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //===============================================
    //metodos
    //===============================================
    
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if
            ($t=="CC"){$this->setSaldo(50);}
        elseif
            ($t == "CP"){$this->setSaldo(150);}
    }
    
    
    public function fecharConta(){
        if 
            ($this->getSaldo()>0)
        {echo"Conta ainda com $, não pode fechar!";}
      elseif
          ($this->getSaldo()<0)
      {echo"Conta em débito, não pode fechar!";}
      else
      {$this->setStatus(false);}
    }
    
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);
              echo "deposito de R$ $v autorizado na conta de ".$this->getDono()."<br/>";
        }else{
            echo "Conta fechada, não consigo depositar!";
        }
    }
    
    
    public function sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo()>=$v)
            {$this->setSaldo($this->getSaldo() - $v);
            echo "saque de R$ $v autorizado na conta de ".$this->getDono()."<br/>";}
            
            else
            {echo"nao posso sacar de uma conta fechada";}
            
        }
    }
    
    
    
    
    
    
    
    public function pagarMensal() {
        
        if 
            ($this->getTipo()=="CC")
                {$v = 12;}
        else if
            ($this->getTipo()=="CP")
                {$v=20;}
        if
            ($this->getStatus())
            {$this->setSaldo($this->getSaldo()-$v);
                          echo "mensalidade de R$ $v autorizado na conta de ".$this->getDono()."<br/>";
            
            }
        else{
            echo "problemas na conta, nao posso fechar";
        } 
    }
    
    //===============================================
    // metodos especiais
    //===============================================
    
    
    //construtor
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo"<br/>conta aberta com sucesso! <br/>";
    }
    
    
    //===============================================
    // getters and setters
    //===============================================
    
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }


    
    
    
    
    
    
}
