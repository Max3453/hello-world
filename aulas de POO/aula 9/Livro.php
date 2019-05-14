<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
Class Livro implements Publicacao{
  // Atributos
  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;
   // Métodos
   public function detalhes(){
    echo "<hr>Livro " . $this->titulo . "escrito por " . $this->autor;
    echo "<br> Paginas: " . $this->totPaginas . " atual " . $this->pagAtual;
    echo "<br> Sendo lido por " . $this->leitor->getNome();
   }

   // Métodos
   function Livro($titulo, $autor, $totPaginas, $leitor){
     $this->titulo = $titulo;;
     $this->autor = $autor;
     $this->totPaginas = $totPaginas;
     $this->aberto = false;
     $this->pagAtual = 0;
     $this->leitor = $leitor;
   }
  function getTitulo(){
    return $this->titulo;
  }
  function setTitulo($titulo){
    $this->titulo = $titulo;
  }
  function getAutor(){
    return $this->autor;
  }
  function setAutor($autor){
    $this->autor = $autor;
  }
  function getTotPaginas(){
    return $this->totpaginas;
  }
  function setTotPaginas($titulo){
    $this->totpaginas = $totpaginas;
  }
  function getpagAtual(){
    return $this->pagatual;
  }
  function setpagAtual($pagatual){
    $this->pagatual = $pagatual;
  }
  function getAberto(){
    return $this->aberto;
  }
  function setAberto($aberto){
    $this->aberto = $aberto;
  }
  function getLeitor(){
    return $this->leitor;
  }
  function setLeitor($leitor){
    $this->leitor = $leitor;
  }
  public function abrir(){
    $this->aberto = true;
  }
  public function avancarPag(){
    $this->pagAtual ++;
  }
  public function fechar(){
    $this->aberto = false;
  }
  public function folhear($p){
    if ($this->totPaginas){
      $this->pagAtual = 80;
    }else{
      $this->pagAtual = $p;
    }
  }
  public function voltarPag(){
    $this->pagAtual --;
  }
}





?>
