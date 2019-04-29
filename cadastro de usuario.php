<?php
require_once 'conexao.php';
Class usuario{

    private $pdo;
      //conexao com o Banco de Dados
      public function __construct($dbname, $host, $user, $senha)
    {
      try{
        $this->pdo = new PDO("mysql:dbname=".$dbname.";host=" .$host,$user,$senha);
      }
      catch (PDOException $e){
          echo "Erro no banco de dados:" .$e->getMessage();
          exit();
      }
      catch (Exception $e){
        echo "Erro genérico:" .$e->getMessage();
        exit();
      }

    }

    // Funçao para buscar dados e colocar no canto direito
    public function buscarDados(){

      $res = array();
      $cmd = $this->pdo->query("SELECT * FROM usuario ORDER BY nome ");
      $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
      return $res;
    }
    //funcão de cadastrar pessoas no Banco de Dados
    public function cadastrarUsuario($nome, $tipo, $cpf, $cnpj, $email)
    {
       //Antes de cadastrar verificar se já tem o email cadastrado
       $cmd = $this->pdo->prepare("SELECT id FROM usuario WHERE email = :e");
       $cmd->bindValue(":e",$email);
       $cmd->execute();
       if($cmd->rowCount() > 0)//email já existe no banco de dados
       {
           return false;
       }else //não foi encontrado o email
       {
           $cmd = $this->pdo->prepare("INSERT INTO usuario (nome, tipo, cpf, cnpj, email)VALUES(:n, :t, :c, :cn, :e)");
           $cmd->bindValue(":n",$nome);
           $cmd->bindValue(":t",$tipo);
           $cmd->bindValue(":c",$cpf);
           $cmd->bindValue(":cn",$cnpj);
           $cmd->bindValue(":e",$email);
           $cmd->execute();
           return true;
       }
    }

    public function excluirUsuario($id)
    {
        $cmd = $this->pdo->prepare("DELETE FROM usuario WHERE id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
    }

    //Buscar Dados de uma pessoa
    public function buscarDadosUsuario($id)
    {
        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM usuario WHERE id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    //Atualizar dados no Banco de Dados

    public function atualizarDados($id, $nome, $tipo, $cpf, $cnpj, $email)
    {

       $cmd = $this->pdo->prepare("UPDATE usuario SET nome = :n, tipo = :t, cpf = :c, cnpj = :cn, email = :e WHERE id = :id");
       $cmd->bindValue(":n",$nome);
       $cmd->bindValue(":t",$tipo);
       $cmd->bindValue(":c",$cpf);
       $cmd->bindValue(":cn",$cnpj);
       $cmd->bindValue(":e",$email);
       $cmd->bindValue(":id",$id);
       $cmd->execute(); 
   }
}

?>
