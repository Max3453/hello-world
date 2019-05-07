<!DOCTYPE HTML>
<?php
    require_once 'app/Models/UsuarioModel.php';

    $userModel = new UsuarioModel;

    $user = $userModel->pull(['*'], $_GET['id'])[0];

?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Alterar Usuário</title>

        <!-- Links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">

            <form action="./app/Action/alterar.php" method="post">
                <div class="form-group">
                    <label for="">Nome: </label>
                    <input type="text" class="form-control" name="nome" value="<?= $user->nome ?>"/>
                </div>
                <div class="row">

                    <?php if($user->tipo == 0): ?>
                        <div class="form-group col" id="id">
                            <label for="">CPF: </label>
                            <input type="number" class="form-control" name="cpf" value="<?= $user->cpf ?>" />
                        </div>
                    <?php else: ?>
                        <div class="form-group col" id="id">
                            <label for="">CNPJ: </label>
                            <input type="number" class="form-control" name="cnpj" value="<?= $user->cnpj ?>" />
                        </div>
                    <?php endif; ?>

                    <div class="form-group col">
                        <label for="">Tipo: </label>
                        <select name="tipo" class="custom-select">
                            <option value="0">Físico</option>
                            <option value="1">Jurídico</option>
                        </select>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="">Email: </label>
                    <input type="email" class="form-control" name="email" value="<?= $user->email ?>" />
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Atualizar</button>
                </div>
            </form>

        </div>

        <script src="./resources/js/switchPersonType.js"></script>

        <script>
            window.onload = function(){
                var campo = document.querySelector('#id');

                if(campo.children[1].name == 'cnpj')
                    document.querySelector('select[name=tipo]').options[1].selected = true;
            }
        </script>

    </body>
</html>