<?php
require_once 'Aluno.php';
Class Tecnico extends Aluno{
  //Atributos
  private $registroprofissional;
  //Métodos
  public function praticar(){
    echo "<p>$this->nome o tecnico tem que praticar!</p>";
  }
  public function getregistroProfissional(){
    return $this->registroprofissional;
  }
  public function setregistroProfissional($registroprofissional){
    $this->registroprofissional = $registroprofissional;
  }
}





?>
