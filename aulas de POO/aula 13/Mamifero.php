<?php
require_once 'Animal.php';
Class Mamifero extends Animal{
  //Atributos
  protected $corPelo;
  //Métodos
  public function emitirSom(){
    echo "<p>Som de mamifero <strong></p>";
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
