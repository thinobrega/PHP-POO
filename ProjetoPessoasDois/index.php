<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <pre>
    <body>
        <?php
        /********************************************************
         * -------------Estrutura do projeto--------------------*
         * 4 Classes: Pessoa, Aluno(super-classe),                     *
         *            Bolsista,Visitante (subclasses)            *                                            
         *                                                      *
         * -------------Escopo do projeto-----------------------*
         * Cada classe tem suas caracteristicas distintas       *
         *                                                      *
         *******************************************************/
            require_once './Pessoa.php';
            require_once './Visitante.php';
            require_once './Aluno.php';
            require_once './Bolsista.php';
            
           /* 
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $v1->setSexo("M");
            print_r($v1);

           */
            
            
            $a1 = new Aluno();
            $a1->setNome("Matheus");
            $a1->setMatricula(11111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informatica");
            $a1->pagarMensalidade();
                       
            print_r($a1);
            
            
            $b1 = new Bolsista();
            $b1->setMatricula(11122);
            $b1->setNome("Jubileu");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();
            print_r($b1);
        ?>
      </pre>
    </body>
</html>
