<?php

    require_once dirname(__FILE__, 3).'/app/Models/UsuarioModel.php';

    session_start();

    $user = new UsuarioModel;

    $_SESSION['cadastro'] = $user->push($_POST);

    header("Location: {$_SERVER['HTTP_REFERER']}");
