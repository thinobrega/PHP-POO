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
         * 2 Classes: Pessoa e Livro                            *                                            
         * 1 interface: Publicação                              *
         * -------------Escopo do projeto-----------------------*
         * No projeto Livro pode-se com objetos pessoas, ler,   *
         * folhear o objeto livro...                            *
         *******************************************************/
        

        
        require_once './Livro.php';
        require_once './Pessoa.php';


        
        // array de obetos pessoa:
        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("Maria", 31, "F");
        
        
        $l[0] = new Livro("PHP Básico", "Jose da Silva", 300, $p[0]);    //pedro
        $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);  //pedro
        $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);      //maria
        
        $l[0]->abrir();
        $l[0]->folhear(100);
        $l[0]->detalhes();
        
        $l[1]->detalhes();
        $l[2]->detalhes();
        
        
        

        
        
        

        ?>
       </pre>
    </body>
</html>
