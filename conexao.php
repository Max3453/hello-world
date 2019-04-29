<?php

try {
  $pdo = new PDO("mysql:dbname=centro;host=localhost","root","");
}
catch (PDOException $e) {
  echo "Erro no Banco de Dados:" .$e->getMessage();
}
catch (Exception $e){
  echo "Erro genérico:" .$e->getMessage();
}



 ?>
