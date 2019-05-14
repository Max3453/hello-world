<!DOCTYPE html>
<html lang = "pt-br">
<head>
   <meta charset = "UTF-8">
    <title>curso de POO em PHP</title>
<body>
<div>
  <pre>
  <?php
   require_once 'Gafanhotos.php';
   require_once 'Video.php';
   require_once 'Visualizacao.php';
   $v[0] = new Video("Aula de POO");
   $v[1] = new Video("Aula de PHP");
   $v[2] = new Video("Aula de HTML5");
   $v[3] = new Video("Aula de MYSQL");
   print_r($v);

   $g[0] = new Gafanhotos("Messi", 31, "M","Juba");
   $g[1] = new Gafanhotos("Fabiana", 25, "F","Rafaela");
   $g[2] = new Gafanhotos("Marcia", 30, "F","Bruna");
   $g[3] = new Gafanhotos("Pedro", 28, "M","Henrique");
   print_r($g);

   $vis[0] = new Visualizacao($g[0], $v[2]);//Messi assistir HTML5
   $vis[1] = new Visualizacao($g[1], $v[3]);//Fabiana assistindo aula de MYSQL
   $vis[2] = new Visualizacao($g[2], $v[1]);//Marcia assistir aula de PHP
   $vis[3] = new Visualizacao($g[3], $v[0]);//Pedro assistindo aula de POO
   $vis[4] = new Visualizacao($g[0], $v[1]);//Messi assitiu aula de PHP
   $vis[5] = new Visualizacao($g[3], $v[2]);//Pedro assistiu aula de HTML5
   $vis[6] = new Visualizacao($g[2], $v[0]);//Marcia assistindo aula de POO
   $vis[7] = new Visualizacao($g[2], $v[0]);//Marcia assistiu aula de POO
   $vis[8] = new Visualizacao($g[0], $v[3]);//Messi assistindo aula de MYSQL
   print_r($vis);

   $vis[0]->avaliar();
   $vis[1]->avaliarPorc(90);
   print_r($vis);

  ?>
</pre>
</div>
</body>
</head>
</html>
