<?php

require_once './Pessoa.php';

class Aluno extends Pessoa{
            
    //atributos
    private $matricula;
    private $curso;
    
    //metodos
    public function pagarMensalidade(){
        echo"pagando mensalidade do aluno " . $this->getNome()."<br>";
    }
    
    /*=====================================================
     * gettes and setters
     =====================================================*/

  public function getMatricula() {
      return $this->matricula;
  }

  public function getCurso() {
      return $this->curso;
  }

  public function setMatricula($matricula): void {
      $this->matricula = $matricula;
  }

  public function setCurso($curso): void {
      $this->curso = $curso;
  }


    
    
    }
