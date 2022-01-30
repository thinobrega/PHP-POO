<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //Requires p/ as clases 
            require_once './Lutador.php';
            require_once './Luta.php';
            
         
           // Criação dos Lutadores atraves da classe lutador
           $a = new Lutador("Mike Tyson", "USA", 32, 1.88, 101, 44,4, 0);
           $b = new Lutador("Hollyfield", "New Zeland", 37, 1.93, 110, 40, 3, 2);
           $c = new Lutador("Conor McGregor", "Ireland", 27, 1.75, 80, 29, 2, 1);
           $d = new Lutador("Jose Aldo", "Brasil", 29, 1.77, 82, 37, 3, 4);
           
           // Descrição dos Lutadores pré luta
            $a->status();
            $b->status();
            $c->status();
            $d->status();
            
            $b->apresentar();
            $a->apresentar();
            
            // Criação das Lutas atraves da classe luta
            $UEC01 = new Luta();
            $UEC01->marcarLuta($a, $b);
            $UEC01->lutar();
            
            
            // Descrição dos Lutadores pós luta
            $a->status();
            $b->status();
            
        ?>
    </body>
</html>
