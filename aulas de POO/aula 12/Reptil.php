<?php
require_once 'Animal.php';
Class Reptil extends Animal{
  //Atributos
  private $corEscama;
  //Métodos
  public function locomover(){
    echo "<p>Rastejando</p>";
  }
  public function alimentar(){
    echo "<p>Comendo vegetais</p>";
  }
  public function emitirSom(){
    echo "<p>Som de Réptil</p>";
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
