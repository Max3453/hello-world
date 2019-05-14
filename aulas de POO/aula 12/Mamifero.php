<?php
require_once 'Animal.php';
Class Mamifero extends Animal{
  //Atributos
  private $corPelo;
  //Métodos
  public function alimentar(){
    echo "<p>Mamando</p>";
  }
  public function emitirSom(){
    echo "<p>Som de Mamifero</p>";
  }
  public function locomover(){
    echo "<p>Correndo <strong></p>";
  }
  //Métodos Especiais
  public function getcorPelo(){
    return $this->corPelo;
  }
  public function setcorPelo($corPelo){
    $this->corPelo = $corPelo;
  }
}





?>
