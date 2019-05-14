<!DOCTYPE html>
<html lang ="pt-br">
<head>
   <meta charset = "UTF-8">
     <title>curso de poo aula 12 de Polimorfismo</title>
<body>
<div>
  <pre>
  <?php
   require_once 'Mamifero.php';
   require_once 'Reptil.php';
   require_once 'Peixe.php';
   require_once 'Ave.php';
   require_once 'Canguru.php';
   require_once 'Cachorro.php';
   require_once 'Tartaruga.php';
   require_once 'Cobra.php';
   require_once 'Goldfish.php';
   require_once 'Arara.php';

   $m = new Mamifero();
   $m->setPeso(33.5);
   $m->locomover();
   $m->setIdade(7);
   $m->setMembros(4);
   $m->alimentar();
   $m->emitirSom();
   print_r($m);

   $r = new Reptil();
   $r->setPeso(50.7);
   $r->locomover();
   $r->setIdade(10);
   $r->setMembros(4);
   $r->emitirSom();
   $r->alimentar();
   print_r($r);

   $p = new Peixe();
   $p->setPeso(10.4);
   $p->locomover();
   $p->setIdade(5);
   $p->setMembros(0);
   $p->alimentar();
   $p->emitirSom();
   $p->soltarBolha();
   print_r($p);

   $a = new Ave();
   $a->locomover();
   $a->setPeso(8);
   $a->setIdade(3);
   $a->setMembros(2);
   $a->alimentar();
   $a->emitirSom();
   $a->fazerNinho();
   print_r($a);

   $c = new Canguru();
   $c->locomover();
   $c->setPeso(5);
   $c->setIdade(2);
   $c->setMembros(4);
   $c->alimentar();
   print_r($c);

   $ca = new Cachorro();
   $ca->locomover();
   $ca->setPeso(30);
   $ca->setMembros(4);
   $ca->alimentar();
   $ca->setIdade(4);
   print_r($ca);

   $co = new Cobra();
   $co->locomover();
   $co->setPeso(15);
   $co->setMembros(0);
   $co->setIdade(5);
   $co->alimentar();
   print_r($co);

   $t = new Tartaruga();
   $t->locomover();
   $t->setPeso(3);
   $t->setMembros(4);
   $t->setIdade(10);
   $t->alimentar();
   print_r($t);

   $g = new Goldfish();
   $g->locomover();
   $g->setPeso(2);
   $g->setMembros(0);
   $g->setIdade(1);
   $g->alimentar();
   print_r($g);

   $ar = new Arara();
   $ar->locomover();
   $ar->setPeso(4);
   $ar->setMembros(2);
   $ar->setIdade(7);
   $ar->alimentar();
   print_r($ar);
  ?>
</pre>
</div>
</body>
</head>
</html>
