<?php
require_once './Animal.php';
class Peixe extends Animal{
    
    //atributos
    private $corEscama;
    
    //funções
    function soltarBolha(){
        echo"soltou uma bolha";
    }
    
     /*======================================
     * metodos abstratos
     * =====================================*/ 
    
    
    public function alimentar() {
        echo"comendo substancias";
        
    }

    public function emitirSom() {
        echo"peixe nao faz som";
        
    }

    public function locomover() {
        echo"nadando";
        
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
