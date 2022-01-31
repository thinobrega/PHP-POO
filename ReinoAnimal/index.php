<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <pre>
    <body>
        /********************************************************
         * -------------Estrutura do projeto--------------------*
         * 12 Classes: Animal(classe Abstrata),                 *
         * Ave-> arara/                                         *
         * Mamifero -> cachorro, canguru, lobo,                 *
         * Reptil-> tartaruga, cobra,                           *
         * Peixe-> goldfish,                                    *
         *                                                      *
         * -------------Escopo do projeto-----------------------*
         * Cada classe tem suas caracteristicas distintas,      *
         * este projeto apresenta de maneira simples o conceito *
         * de poliformismo, onde 1 metodo apresenta diversos    * 
         * outputs                                              *
         *******************************************************/
        <?php
        require_once './Animal.php';
        require_once './Mamifero.php';
        require_once './Reptil.php';    
        require_once './Peixe.php';
        require_once './Ave.php';
        require_once './Canguru.php';
        require_once './Cachorro.php';
        require_once './Cobra.php';
        require_once './Tartaruga.php';
        require_once './GoldFish.php';
        require_once './Arara.php';
        require_once './Lobo.php';
        
        
      
        
       // $m = new Mamifero();
       // $m->setPeso(33.5);
       // $m->locomover();
       
        
       /* $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();
        
       $t->locomover();
       $c->locomover();
       $k->locomover();
       
        */
        
        /*==============================================
         *(conceito de poliformismo onde 1 metodo apresenta varios outputs) 
         *==============================================*/
        $m = new Mamifero();
        $k = new Cachorro();  
        $lob = new Lobo();
          
        $k->emitirSom();
        $m->emitirSom();
        $lob->emitirSom();
        
        
        
        ?>
     </pre>
    </body>
</html>
