<!DOCTYPE html>
<html lang ="pt-br">
<head>
   <meta charset = "UTF-8">
    <title>curso de poo aula 11 os conceitos de herança</title>
<body>
<div>
  <pre>
   <?php
     require_once 'Visitante.php';
     require_once 'Aluno.php';
     require_once 'Bolsista.php';
     require_once 'Professor.php';
     require_once 'Tecnico.php';
     // $p1 = new Pessoa();
     // $v1 = new Visitante();
     // $v1->setNome("Juvenal");
     // $v1->setIdade(33);
     // $v1->setSexo("M");
     // print_r($v1);
     $a1 = new Aluno();
     $a1->setNome("Messi");
     $a1->setMatricula(2222);
     $a1->setIdade(31);
     $a1->setSexo("M");
     $a1->setCurso("Informatica");
     $a1->pagarMensalidade();
     print_r($a1);

     $b1 = new Bolsista();
     $b1->setMatricula(3333);
     $b1->setBolsa(12.5);
     $b1->setIdade(28);
     $b1->setCurso("Programadora de PHP");
     $b1->pagarMensalidade();
     $b1->setNome("Julia");
     $b1->setSexo("F");
     print_r($b1);

     $b3 = new Professor();
     $b3->setNome("Marcos");
     $b3->setIdade(45);
     $b3->setSexo("M");
     $b3->receberAumento();
     $b3->setEspecialidade("Matemática");
     print_r($b3);

     $b4 = new Tecnico();
     $b4->setNome("Fabiano");
     $b4->setIdade(22);
     $b4->setSexo("M");
     $b4->praticar();
     $b4->setregistroProfissional("UFBA");
     $b4->setMatricula(4444);
     $b4->setCurso("Programador de Mysql");
     print_r($b4);
   ?>
 </pre>
</div>
</body>
</head>
</html>
