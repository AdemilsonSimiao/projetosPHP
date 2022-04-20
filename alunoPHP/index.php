<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <pre>
teste        
        <?php
        
            require_once 'Video.php';
            require_once 'Aluno.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video ("Aula 1 de POO");
            $v[1] = new Video ("Aula 12 de PHP");
            $v[2] = new Video ("Aula 15 de HTML5");

            $g[0] = new Aluno("Ju", 20, "M", "Juba");
            $g[1] = new Aluno("Su", 22, "M", "Suruba");

            $vis[0] = new Visualizacao($g[0], $v[2]);
            $vis[1] = new Visualizacao($g[0], $v[1]);
            $vis[3] = new Visualizacao($g[0], $v[0]);

            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);
            print_r($v);
            print_r($g);
            print_r($vis);
        ?>
    <pre>
</body>
</html>