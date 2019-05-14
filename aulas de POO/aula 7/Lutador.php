<?php

Class Lutador {
  //Atributos
  private $nome;
  private $nacionalidade;
  private $idade, $altura, $peso;
  private $categoria, $vitorias, $derrotas, $empates;
  //Métosdos
  public function apresentar(){
    echo "<p>--------------------------</p>";
    echo "<p>Chegou a hora1! O lutador " . $this->getNome();
    echo " Veio diretamente de " . $this->getNacionalidade();
    echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " kg ";
    echo "<br>Ele tem " . $this->getVitorias() . " vitorias ";
    echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates ";
  }
  public function status(){
    echo "<p>----------------------------</p>";
    echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
    echo " e já ganhou " . $this->getVitorias() . " vezes,";
    echo " perdeu " . $this->getDerrotas() . " vezes e ";
    echo " empatou " . $this->getEmpates() . " vezes!";
  }
   public function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
  }
   public function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);
  }
  public function empatarLuta(){
    $this->setEmpates($this->getEmpates() + 1);
  }
  //Métodos Especiais
  public function Lutador($no, $na, $id, $al, $pe, $vi, $de, $em) {
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
  }
  private function getNome() {
    return $this->nome;
  }
  private function setNome($no){
    $this->nome = $no;
  }
  private function getNacionalidade(){
    return $this->nacionalidade;
  }
  private function setNacionalidade($na){
    $this->nacionalidade = $na;
  }
  private function getCategoria(){
    return $this->categoria;
  }
  private function setCategoria(){
   if ($this->peso < 52.2) {
     $this->categoria = "Inválido";
   }elseif ($this->peso <= 70.3) {
     $this->categoria = "Leve";
   }elseif ($this->peso <= 83.9) {
     $this->categoria = "Médio";
   }elseif ($this->peso <= 120.2){
     $this->categoria = "Pesado";
   }else{
     $this->categoria = "Inválido";
   }
  }
  private function getIdade(){
    return $this->idade;
  }
  private function setIdade($id){
    $this->idade = $id;
  }
  private function getAltura(){
    return $this->altura;
  }
  private function setAltura($al){
    $this->altura = $al;
  }
  public function getPeso(){
    return $this->peso;
  }
  private function setPeso($pe){
    $this->peso = $pe;
    $this->setCategoria();
  }
  private function getVitorias(){
    return $this->vitorias;
  }
  private function setVitorias($vi){
    $this->vitorias = $vi;
  }
  private function getDerrotas(){
    return $this->derrotas;
  }
   private function setDerrotas($de){
    $this->derrotas = $de;
  }
  private function getEmpates(){
    return $this->empates;
  }
  private function setEmpates($em){
    $this->empates = $em;
  }
}





?>
