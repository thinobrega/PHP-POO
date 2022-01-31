<?php
require_once './Reptil.php';
class Tartaruga extends Reptil{


    public function locomover() {
        parent::locomover();
        echo"<br>andando beeeeeem devagar<br>";
        }
}
