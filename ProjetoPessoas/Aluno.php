<?php

require_once './Pessoa.php';

class Aluno extends Pessoa{

        //atributos
        private $matr;
        private $curso;
        
        
        
        //metodos
        public function cancelarMatr(){
           echo "matricula será cancelada"; 
         }
         
        /*========================================================
        * getters and setters
        * =======================================================*/
        
        public function getMatr() {
             return $this->matr;
         }

         public function getCurso() {
             return $this->curso;
         }

         public function setMatr($matr): void {
             $this->matr = $matr;
         }

         public function setCurso($curso): void {
             $this->curso = $curso;
         }


        








    
}
