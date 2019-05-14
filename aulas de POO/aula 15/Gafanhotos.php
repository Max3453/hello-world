<?php
require_once 'Pessoa.php';
Class Gafanhotos extends Pessoa{
  //Atributos
  private $login;
  private $totAssistindo;
  //Métodos
  public function assistirMaisum(){
    $this->totassistindo ++;
  }
  //Métodos Especiais
  public function __Construct($nome, $idade, $sexo, $login){
    parent::__Construct($nome, $idade, $sexo);
    $this->login = $login;
    $this->totAssistindo = 0;
  }
  public function getLogin(){
    return $this->login;
  }
  public function setLogin($login){
    $this->login = $login;
  }
  public function getTotAssistindo(){
    return $this->totAssistindo;
  }
  public function setTotAssistindo($totAssistindo){
    $this->totAssistindo = $totAssistindo;
  }
}




?>
