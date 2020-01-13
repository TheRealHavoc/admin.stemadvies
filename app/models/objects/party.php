<?php

    class Party {

        private $conn;
        
        public $id;
        public $name;
        public $chairman;
        public $left;
        public $right;
        public $prog;
        public $cons;
        
        private $created_on;
        private $last_edited;

        public function __construct($db) {
            $this->conn = $db;
        }

        function getAll() {

            $sql = $this->conn->prepare("
                SELECT `id`, `name`, `chairman`, `created_on`, `last_edited` FROM `parties`
            ");

            if (!$sql->execute()) return false;

            if (empty($res = $sql->fetchall())) return false;

            return $res;

        }

        function add() {

            $sql = $this->conn->prepare("
            INSERT INTO `parties` 
                (`id`, `name`, `chairman`, `created_on`, `last_edited`) 
            VALUES 
                (NULL, :name, :chairman, current_timestamp(), current_timestamp());
            ");

            $sql->bindParam(':name', $this->name);
            $sql->bindParam(':chairman', $this->chairman);

            if (!$sql->execute()) return false;

            $sql = $this->conn->prepare("
                INSERT INTO `spectrum` 
                    (`party_id`, `left_wing`, `right_wing`, `progressive`, `conservative`) 
                VALUES 
                    (:id, :left, :right, :prog, :cons);
            ");

            $sql->bindParam(':id', $this->conn->lastInsertId());
            $sql->bindParam(':left', $left);
            $sql->bindParam(':right', $right);
            $sql->bindParam(':prog', $prog);
            $sql->bindParam(':cons', $cons);

            if (!$sql->execute()) return false;

            return true;

        }

    }

?>