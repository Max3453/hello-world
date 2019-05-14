<?php
require_once 'Aluno.php';
Class Bolsista extends Aluno{
 //Aributos
 private $bolsa;
 //Métodos
 public function renovaBolsa(){
   echo "<p>Bolsa renovada</p>";
 }
 public function pagarMensalidade(){
   echo "<p>$this->nome  Julia é bolsista! Então paga com desconto!</p>";
}
 //Métodos Especiais
  public function getBolsa(){
   return $this->bolsa;
 }
  public function setBolsa($bolsa){
   $this->bolsa = $bolsa;
 }

}




?>
