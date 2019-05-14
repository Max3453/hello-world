<?php
require_once 'Animal.php';
Class Ave extends Animal{
  //Atributos
  private $corPena;
  //Métodos
  public function locomover(){
    echo "<p>Voando</p>";
  }
  public function alimentar(){
    echo "<p>Comendo frutas</p>";
  }
  public function emitirSom(){
    echo "<p>Som de ave</p>";
  }
  public function fazerNinho(){
    echo "<p>Construi um ninho></p>";
  }
  //Métodos Especiais
  public function getcorPena(){
    return $this->corPena;
  }
  public function setcorPena($corPena){
    $this->corPena = $corPena;
  }
}




?>
