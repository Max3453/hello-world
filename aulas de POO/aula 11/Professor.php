<?php
require_once 'Pessoa.php';
Class Professor extends Pessoa{
  //Atributos
  private $especialidade;
  private $salario;
  //Métodos
  public function receberAumento(){
    echo "<p>$this->nome o professor irá receber aumento de salario!</p>";
  }
  //Métodos Especiais
  public function getEspecialidade(){
    return $this->especialidade;
  }
  public function setEspecialidade($especialidade){
    $this->especialidade = $especialidade;
  }
  public function getSalario(){
    return $this->salario;
  }
  public function setSalario($salario){
    $this->salario = $salario;
  }
}





?>
