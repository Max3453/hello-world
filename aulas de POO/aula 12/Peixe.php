<?php
require_once 'Animal.php';
Class Peixe extends Animal{
  //Atributos
  private $corEscama;
  //Métedos
  public function locomover(){
    echo "<p>Nadando</p>";
  }
  public function alimentar(){
    echo "<p>Comendo substâncias</p>";
  }
  public function emitirSom(){
    echo "<p>Peixe não faz som</p>";
  }
  public function soltarBolha(){
    echo "<p>Soltou uma bolha</p>";
  }
  //Métodos Especiais
  public function getcorEscama(){
    return $this->corEscama;
  }
  public function setcorEscama($corEscama){
    $this->corEscama = $corEscama;
  }
}



?>
