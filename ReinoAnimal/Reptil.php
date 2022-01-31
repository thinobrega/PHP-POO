<?php
require_once './Animal.php';
class Reptil  extends Animal{
    
    
    //atributos
    private $corEscama;
    
    /*======================================
     * metodos abstratos
     * =====================================*/ 
    public function alimentar() {
        echo"comendo vegetais";
    }

    public function emitirSom() {
        echo"som de reptil";
    }

    public function locomover() {
        echo"rastejando";
    }
     /*======================================
      * getters and setters
      * =====================================*/

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


    
    }
