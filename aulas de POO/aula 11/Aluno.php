<?php
require_once 'Pessoa.php';
 Class Aluno extends Pessoa{
  //Atributos
  private $matricula;
  private $curso;
  // Métodos
  public function pagarMensalidade(){
    echo "<p>Pagando mensalidade do aluno <strong> $this->nome</p>";
  }
  //Métodos Especiais
  public function getMatricula(){
    return $this->matricula;
  }
  public function setMatricula($matricula){
    $this->matricula = $matricula;
  }
  public function getCurso(){
    return $this->curso;
  }
  public function setCurso($curso){
    $this->curso = $curso;
  }
}




?>
