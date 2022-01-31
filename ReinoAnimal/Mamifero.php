<?php

require_once './Animal.php';

class Mamifero extends Animal {
    
        //atributos
        private $corPelo;
        
        
        
     /*======================================
      * metodos abstratos
      * =====================================*/   
    public function alimentar() {
        echo"<br>Mamando<br>";
    }

    public function emitirSom() {
        echo"<br>som de mamifero<br>";
    }

    public function locomover() {
        echo"<br>correndo<br>";
    }
     /*======================================
      * getters and setters
      * =====================================*/
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }


}
