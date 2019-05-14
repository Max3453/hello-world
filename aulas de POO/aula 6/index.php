<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
     <title>curso de aula de encapsulamento 6</title>

</head>
<body>
<div>
  <pre>
   <?php
    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    $c->desligar();
    $c->maisVolume();
    $c->abrirMenu();
   ?>
</pre>
</div>
</body>
</html>
