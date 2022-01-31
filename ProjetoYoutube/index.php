<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        /*
         * esse exercicio apresenta os 3 pilares da poo
         * encapsulamento: interface com getters e setters
         * herança: onde gafanhoto herda de pessoa
         * poliformismo: metodos play, pause e curtir sao sobreescritos 
         *============================================================== */
        
        
            require_once './Video.php';
            require_once './Gafanhoto.php';
            require_once './Visualizacao.php';
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
        
            //print_r($v);
            
            $g[0] = new Gafanhoto("jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("creusa", 24, "F", "creuzita");
            //print_r($g);
            
            $vis[0] = new Visualizacao($g[0], $v[2]);//jubileu assiste html5
            $vis[1] =  new Visualizacao($g[0], $v[1]);
            
          $vis[0]->avaliar();
          $vis[1]->avaliarPorc(85);
            
            print_r($vis);
            
            
            
            
            
            
            
            
            ?>
        </pre>
    </body>
</html>
