<?php
require_once './Mamifero.php';
class Canguru extends Mamifero{

    public function locomover() {
        parent::locomover();
        echo"<br>saltando<br>";
    }
    
}
