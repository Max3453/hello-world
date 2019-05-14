<?php
require_once 'index.php';
abstract Class Animal{
  //Atributos
  protected $Peso;
  protected $Idade;
  protected $Membros;
  //Métodos
 public abstract function emitirSom();
 //Métodos Especiais
 public function getPeso(){
   return $this->Peso;
 }
 public function setPeso($Peso){
   $this->Peso = $Peso;
 }
 public function getIdade(){
   return $this->Idade;
 }
 public function setIdade($Idade){
   $this->Idade = $Idade;
 }
 public function getMembros(){
   return $this->Membros;
 }
 public function setMembros($Membros){
   $this->Membros = $Membros;
 }
}





?>
