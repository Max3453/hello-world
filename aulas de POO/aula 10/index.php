<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <meta charset ="UTF-8">
      <title>curso aula 10 de poo herança</title>
<body>
  <div>
  <pre>
   <?php
   require_once 'Pessoa.php';
   require_once 'Aluno.php';
   require_once 'Professor.php';
   require_once 'Funcionario.php';
  // Programa principal
   $p1 = new Pessoa();
   $p2 = new Aluno();
   $p3 = new Professor();
   $p4 = new Funcionario();

   $p1->setNome("Pedro");
   $p2->setNome("Maria");
   $p3->setNome("Messi");
   $p4->setNome("Fabiana");

   $p1->setSexo("M");
   $p2->setSexo("F");
   $p3->setSexo("M");
   $p4->setSexo("F");

   $p2->setCurso("Informatica");
   $p3->setSalario(2500.75);
   $p4->setSetor("Estoque");

   $p3->receberAum(550.20);
   $p4->mudarTrabalho();
   $p2->cancelarMatr();
   $p1->fazerAniversario();
   
   print_r($p1);
   print_r($p2);
   print_r($p3);
   print_r($p4);




   ?>
 </pre>
</div>
</body>
</head>
</html>
