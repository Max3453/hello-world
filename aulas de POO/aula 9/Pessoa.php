<?php

Class Pessoa{
  // Atributos
private $nome;
private $idade;
private $sexo;
  // Métodos
  public function fazerAniver(){
    $this->idade = $this->idade + 1;
  }
  // Métodos Especiais
 function Pessoa($nome, $idade, $sexo) {
   $this->nome = $nome;
   $this->idade = $idade;
   $this->sexo = $sexo;
 }
 function getNome(){
   return $this->nome;
 }
 function setNome($nome){
   $this->nome = $nome;
 }
 function getIdade(){
   return $this->idade;
 }
 function setIdade($idade){
   $this->idade = $idade;
 }
 function getSexo(){
   return $this->sexo;
 }
 function setSexo($sexo){
   $this->sexo = $sexo;
  }
}
?>
