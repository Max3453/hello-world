<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Cadastro de Usuário</title>

        <!-- Links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            
            <?php if(isset($_SESSION['cadastro'])): ?>
                <div class="alert alert-success mt-3 mb-3">
                    <p>
                        <b>Sucesso!</b>
                        <br>
                        O usuário foi cadastrado.
                    </p>
                </div>
            <?php endif; ?>

            <form action="./app/Action/cadastroUsuario.php" method="post">
                <div class="form-group">
                    <label for="">Nome: </label>
                    <input type="text" class="form-control" name="nome"/>
                </div>
                <div class="row">
                    <div class="form-group col" id="id">
                        <label for="">CPF: </label>
                        <input type="number" class="form-control" name="cpf" />
                    </div>
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
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Cadastro</button>
                </div>
            </form>
        </div>
        
        <script src="./resources/js/switchPersonType.js"></script>

    </body>
</html>

<?php
    session_destroy();
?>