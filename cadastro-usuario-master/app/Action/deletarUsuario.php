<?php

    require_once dirname(__FILE__, 3).'/app/Models/UsuarioModel.php';

    $user = new UsuarioModel;

    $user->remove($_POST);

    header("Location: {$_SERVER['HTTP_REFERER']}");