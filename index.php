<?php
require_once 'cadastro de usuario.php';
$usuario = new usuario("centro","localhost","root","");
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
    <title>Cadastro Usuario</title>
     <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <?php
   if(isset($_POST['nome']))//Clicou no botão cadastrar ou editar
   {
       //-----------------Editar-------------------
       if(isset($_GET['id_up']) && !empty($_GET['id_up']))
       {
         $id_upd = addslashes($_GET['id_up']);
         $nome = addslashes($_POST['nome']);
         $tipo = addslashes($_POST['tipo']);
         $cpf = addslashes($_POST['cpf']);
         $cnpj = addslashes($_POST['cnpj']);
         $email = addslashes($_POST['email']);
         if (!empty($nome) && !empty($tipo) && !empty($cpf) && !empty($cnpj) && !empty($email)) {
             //Editar
             $usuario->atualizarDados($id_upd, $nome, $tipo, $cpf, $cnpj, $email);
             header("location: index.php");
         }
         else
         {
             echo "Preenha todos os Campos";
         }
       }
       //----------------------Cadastrar--------------
       else
       {
         $nome = addslashes($_POST['nome']);
         $tipo = addslashes($_POST['tipo']);
         $cpf = addslashes($_POST['cpf']);
         $cnpj = addslashes($_POST['cnpj']);
         $email = addslashes($_POST['email']);
         if (!empty($nome) && !empty($tipo) && !empty($cpf) && !empty($cnpj) && !empty($email)) {
             //cadastrar
             if(!$usuario->cadastrarUsuario($nome, $tipo, $cpf, $cnpj, $email))
             {
                 echo "Email ja esta cadastrado!";
             }
         }
         else
         {
             echo "Preenha todos os Campos";
         }
       }
     }
   ?>
   <?php
      if(isset($_GET['id_up']))//Se a pessoa clicou em editar
      {
          $id_update = addslashes($_GET['id_up']);
          $res = $usuario->buscarDadosUsuario($id_update);
      }

    ?>
  <section id="esquerda">
      <form method="POST">
        <h2>Cadastrar Usuario</h2>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"
        value="<?php if(isset($res)){echo $res['nome'];}?>"
        >
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo"
        value="<?php if(isset($res)){echo $res['tipo'];}?>"
        >
        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf"
        value="<?php if(isset($res)){echo $res['cpf'];}?>"
        >
        <label for="cnpj">Cnpj</label>
        <input type="text" name="cnpj" id="cnpj"
        value="<?php if(isset($res)){echo $res['cnpj'];}?>"
        >
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
        value="<?php if(isset($res)){echo $res['email'];}?>"
        >
        <input type="submit"
        value="<?php if(isset($res)){echo "Atualizar";}else
        {echo "Cadastrar";} ?>">
      </form>
  </section>
  <section id="direita">
    <table>
       <tr id="titulo">
         <td>NOME</td>
         <td>TIPO</td>
         <td>CPF</td>
         <td>CNPJ</td>
         <td colspan="2">EMAIL</td>
       </tr>
     <?php
     $dados = $usuario->buscarDados();
     if(count($dados) > 0)// se tem usuarios no banco de dados
     {
       for ($i=0; $i < count($dados); $i++)
       {
            echo "<tr>";
           foreach ($dados[$i] as $key => $value)
           {
              if ($key != "id")
              {
                echo "<td>".$value."</td>";
              }
           }
           ?>
              <td>
                <a href="index.php?id_up=<?php echo $dados[$i]['id'];?>">Editar</a>
                <a href="index.php?id=<?php echo $dados[$i]['id'];?>">Excluir</a>
              </td>
           <?php
           echo "</tr>";
        }
     }
     else//o Banco de Dados esta vazio
     {
         echo "Ainda não há pessoas cadastradas";
     }
  ?>
      </table>
  </section>
</body>
</html>


<?php

   if(isset($_GET['id']))
   {
      $id_usuario = addslashes($_GET['id']);
      $usuario->excluirUsuario($id_usuario);
      header("location: index.php");
   }

 ?>
