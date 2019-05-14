<!DOCTYPE html>
<html lang = "pt-br">
<head>
   <meta charset = "UTF-8">
    <tiltle>curso de poo aula 13 polimorfismo</title>
<body>
<div>
  <pre>
  <?php
   //Programa Principal
     require_once 'Mamifero.php';
     require_once 'Lobo.php';
     require_once 'Cachorro.php';

     $m = new Mamifero();
     $m->emitirSom();
     $m->setIdade(5);
     $m->setPeso(10);
     $m->setMembros(4);
     print_r($m);
     $l = new Lobo();
     $l->emitirSom();
     $l->setIdade(8);
     $l->setPeso(12);
     $l->setMembros(4);
     print_r($l);
     $c = new Cachorro();
     $c->emitirSom();
     $c->setIdade(9);
     $c->setPeso(4);
     $c->setMembros(4);
     $c->reagirfrase("Olá");
     $c->reagirfrase("Vai apanhar");
     $c->reagirhora(11,45);
     $c->reagirhora(19,00);
     $c->reagirdono(true);
     $c->reagirdono(false);
     $c->reagiridade(4, 10.7);
     $c->reagiridade(18, 5.5);
     print_r($c);



  ?>
</pre>
</div>
</body>
</head>
</html>
