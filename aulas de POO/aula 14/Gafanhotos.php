<?php
require_once 'Pessoa.php';
Class Gafanhotos extends Pessoa{
  //Atributos
  private $login;
  private $totAssistindo;
  //Métodos
  public function assistirMaisUm(){
    $this->assistindo ++;
  }
  public function __construct($nome, $idade, $sexo, $login){
    parent::__construct($nome, $idade, $sexo);
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
    return $this->totassistindo;
  }
  public function setTotAssistindo($totassistindo){
    $this->totassistindo = $totassistindo;
  }
}




?>
