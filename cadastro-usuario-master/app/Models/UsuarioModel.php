<?php

    require_once dirname(__FILE__, 1).'/Model.php';

    class UsuarioModel extends Model
    {
        protected $table = 'usuario';

        protected $primaryKey = 'id';

        protected $fillable = [
            'nome', 'tipo', 'cpf', 'cnpj', 'email'
        ];
    }