<?php

    class Database 
    {
        protected $db_name;

        protected $host;

        protected $drive;

        protected $user;

        protected $password;

        public function __construct()
        {
            $this->db_name = 'cadastro-usuario';

            $this->host = 'localhost';

            $this->drive = 'mysql';

            $this->user = 'root';

            $this->password = '';

        }

        public function getConnection()
        {
            try{

                $pdo = new PDO("{$this->drive}:dbname={$this->db_name};host={$this->host};", $this->user, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $pdo;

            }catch(PDOException $error)
            {
                die('Não foi possível conectar ao banco de dados!');
            }
        }

    }