<!DOCTYPE html>
<hml lang = "pt-br">
<head>
  <meta charset = "UTF-8">
    <title>curso de poo aula 14</title>
<body>
<div>
  <pre>
 <?php
     require_once 'Video.php';
     require_once 'Gafanhotos.php';
    $v[0] = new video("Aula 1 de POO");
    $v[1] = new video("Aula 12 de PHP");
    $v[2] = new video("Aula 15 de HTML5");

    $g[0] = new Gafanhotos("Messi", 31, "M","juba");
    $g[1] = new Gafanhotos("Marcos", 22, "M","Fabiana");
    $g[2] = new Gafanhotos("Rafaela", 25, "F","Pedro");

    print_r($v);
    print_r($g);

 ?>
</pre>
</div>
</body>
</head>
  </html>
