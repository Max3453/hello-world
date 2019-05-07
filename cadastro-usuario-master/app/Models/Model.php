<?php

    require_once dirname(__FILE__, 3).'/config/Database.php';

    class Model
    {
        protected $table;

        protected $primaryKey;

        protected $fillable;

        private $connection;

        public function __construct()
        {
            $database = new Database;

            $this->connection = $database->getConnection();
        }

        public function push(array $data)
        {
            // Pega os valores a ser adicionados ao banco
            $values = $this->prepareStatement($data, function($key){
                return ':'.$key;
            });

            // Pega os campos que devem ser preenchidos
            $tables = $this->prepareStatement($data, function($key){
                return $key;
            });

            $stm = $this->connection->prepare("INSERT INTO {$this->table} (".$tables.") VALUES (".$values.")");
            $this->bindStatement($data, $stm)->execute();

            return true;
        }

        public function pull(array $fill = ['*'], $id = '')
        {
            $condition = empty($id) ? $this->primaryKey.' IS NOT NULL ' : $this->primaryKey.' = '.$id;

            $tables = $this->prepareStatement($fill, function($key, $value){
                return $value;
            });

            $prepare = "SELECT {$tables} FROM {$this->table} WHERE {$condition}";
            $stm = $this->connection->prepare($prepare);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function update(array $data, $id)
        {
            $fill = $this->prepareStatement($data, function($key, $value){
                return "{$key} = '{$value}' ";
            });

            try {

                $stm = $this->connection->prepare("UPDATE {$this->table} SET {$fill} WHERE {$this->primaryKey} = :id");
                $stm->bindParam(':id', $id);
                
                $stm->execute();

            }catch(PDOException $e){
                die($e->getMessage());
            }

        }

        public function remove($fills)
        {
            foreach($fills as $fill)
            {
                $stm = $this->connection->prepare("DELETE FROM {$this->table} WHERE {$this->primaryKey} = :id");
                $stm->bindParam(':id', $fill);

                $stm->execute();
            
            }
        
        }

        private function bindStatement($data, $stm)
        {
            foreach($data as $key => &$value)
            {
                if(!in_array($key, $this->fillable))
                    die("O campo {$key} não foi encontrado!");
                
                $key = ':'.$key;
                $stm->bindParam($key, $value);
            }

            return $stm;
        }

        private function prepareStatement($data, $callback)
        {
            foreach($data as $key => $value)
            {
                $dataUp[] = $callback($key, $value);
            }

            return implode(',', $dataUp);
        }

    }