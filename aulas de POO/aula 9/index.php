<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
     <title>curso de poo aula 9</title>

</head>
<body>
<div>
  <pre>
   <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p[0] = new Pessoa("Messi", 31, "M");
    $p[1] = new Pessoa("Maria", 27, "F");

    $l[0] = new Livro("PHP Basico ", " Jose da Silva ", 300 ,$p[0]);
    $l[1] = new Livro("POO com PHP ", " Maria de Souza ", 500, $p[0]);
    $l[2] = new Livro("PHP Avançado ", " Ana Paula ", 800, $p[1]);

    $l[0]->abrir();
    $l[0]->folhear(100);
    $l[0]->detalhes();
    $l[1]->detalhes();
    
    $l[2]->detalhes();
   ?>
 </pre>
</div>
</body>
</html>
