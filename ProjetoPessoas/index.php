<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <pre>
        <?php
        /********************************************************
         * -------------Estrutura do projeto--------------------*
         * 4 Classes: Pessoa(super-classe),                     *
         *           Prof, Func e Aluno (subclasses)            *                                            
         *                                                      *
         * -------------Escopo do projeto-----------------------*
         * Cada classe tem suas caracteristicas distintas       *
         *                                                      *
         *******************************************************/
            
            // all requires
            require_once './Pessoa.php';
            require_once './Aluno.php';
            require_once './Professor.php';
            require_once './Funcionario.php';
            
            
            //Instanciamentos dos objetos
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();
            
            
            
            // Colocando nome nas pessoas 
            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Cláudio");
            $p4->setNome("Fabiana");
            
            
            
            // explorando um pouquinho mais...
            $p2->setCurso("Informatica");
            $p3->setSalario("2500");
            $p4->setSetor("Estoque");
            
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            
            
            
            
            
        ?>
        
        
        </pre>
    </body>
</html>
