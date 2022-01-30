<?php

require_once './Aluno.php';

class Bolsista extends Aluno{
        
        private $bolsa;
        
        public function pagarMensalidade(){
            echo"$this->nome é bolsista! entao paga com desconto<br>";
            
        }
        public function renovarBolsa(){
            echo"Bolsa Renovada";
        }
        
        
        public function getBolsa() {
            return $this->bolsa;
        }

        public function setBolsa($bolsa): void {
            $this->bolsa = $bolsa;
        }


}
