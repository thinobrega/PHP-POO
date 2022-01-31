<?php

require_once './Animal.php';

class Ave extends Animal{
       

       //atributos
       private $corPena;
       
       
       //funções
       public function fazerNinho(){
           echo"<br>construindo um ninho<br>";
           
       }
       
    
    
    
     /*======================================
     * metodos abstratos
     * =====================================*/ 
 public function alimentar() {
        echo"<br>Comendo Frutas<br>";
    }

    public function emitirSom() {
        echo"som de ave";
    }

    public function locomover() {
        echo"voando";
    }

    
     /*======================================
      * getters and setters
      * =====================================*/
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }


    
}
