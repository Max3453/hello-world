<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
     <title>curso de POO relacionamentos de classes</title>
</head>
<body>
<div>
  <?php
   require_once 'Lutador.php';
   $l = array();
   $l [0]= new Lutador("Pretty Boy", "França", 30, 1.75,
                    68.9, 11, 2, 1);
   $l[1] = new Lutador("Pustscript", "Brazil", 29, 1.68,
                       57.8, 14, 2, 3);
   $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65,
                       80.9, 12, 2, 3);
   $l[3] = new Lutador("Dead Code", "Australia",28, 1.93, 81.6, 13, 0, 2);
   $l[4] = new Lutador("UFOCobol", "Brazil", 37, 1.70,
                       119.3, 5, 4, 3);
   $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

   $l[0]->status();
   $l[0]->apresentar();
   $l[0]->ganharLuta();

  ?>

</div>
</body>
</html>
