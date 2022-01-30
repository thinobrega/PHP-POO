<?php

require_once './Pessoa.php';

class Funcionario extends Pessoa{

    
    //atributos
    private $setor;
    private $trabalhando;
    
    
    //metodos
    public function mudarTrabalho(){
        $this->trabalhando = !$this->trabalhando;    
    }

    
      
    /*========================================================
    * getters and setters
    * =======================================================*/
      
    
  public function getSetor() {
      return $this->setor;
  }

  public function getTrabalhando() {
      return $this->trabalhando;
  }

  public function setSetor($setor): void {
      $this->setor = $setor;
  }

  public function setTrabalhando($trabalhando): void {
      $this->trabalhando = $trabalhando;
  }

    }

