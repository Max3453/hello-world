<?php

    require_once 'app/Models/UsuarioModel.php';

    $userModel = new UsuarioModel;

    $tipos = ['Físico', 'Jurídico']

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <!-- Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        

        <div class="text-right mt-2 mb-2">
            <a href="cadastroUsuario.php" class="btn btn-primary">Adicionar</a>
        </div>

        <table class="table text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NOME</th>
                    <th>TIPO</th>
                    <th>CPF</th>
                    <th>CNPJ</th>
                    <th>EMAIL</th>
                    <th colspan="2">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($userModel->pull() as $user): ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->nome ?></td>
                        <td><?= $tipos[$user->tipo] ?></td>
                        <td><?= empty($user->cpf) ? '----' : $user->cpf ?></td>
                        <td><?= empty($user->cnpj) ? '----' : $user->cnpj ?></td>
                        <td><?= $user->email ?></td>
                        <td>
                            <a href="alterar.php?id=<?= $user->id ?>" class="btn btn-warning text-white">Alterar</a>
                        </td>
                        <td>
                            <form action="./app/Action/deletarUsuario.php" method="post" onclick="return confirm('Deseja realmente excluir?');">
                                <button class="btn btn-danger">Deletar</button>
                                <input type="hidden" name="produto" value="<?= $user->id ?>"/>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>