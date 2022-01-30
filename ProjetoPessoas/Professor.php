<?php
require_once './Pessoa.php';
class Professor extends Pessoa{
        
    
    //atributos
    private $especialidade;
    private $salario;
    
    
    
    //funções
    public function receberAumento($aum){
        $this->salario +=aum;  
    }
    
    
    
    /*========================================================
    * getters and setters
    * =======================================================*/
    
  public function getEspecialidade() {
      return $this->especialidade;
  }

  public function getSalario() {
      return $this->salario;
  }

  public function setEspecialidade($especialidade): void {
      $this->especialidade = $especialidade;
  }

  public function setSalario($salario): void {
      $this->salario = $salario;
  }


    
    
    
    
    
    
    
    
    
    
}
