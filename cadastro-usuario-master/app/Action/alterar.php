<?php

    require_once dirname(__FILE__, 3).'/app/Models/UsuarioModel.php';

    $user = new UsuarioModel;

    $user->update($_POST, $_POST['id']);
