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

        function getSingle() {

            $sql = $this->conn->prepare("
                SELECT `id`, `name`, `chairman`, `created_on`, `last_edited` FROM `parties`
                WHERE `id` = :id
            ");

            $sql->bindParam(':id', $this->id);

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

            $id = $this->conn->lastInsertId();

            $sql = $this->conn->prepare("
                INSERT INTO `spectrum` 
                    (`party_id`, `left_wing`, `right_wing`, `progressive`, `conservative`) 
                VALUES 
                    (:id, :left, :right, :prog, :cons);
            ");

            $sql->bindParam(':id', $id);
            $sql->bindParam(':left', $this->left);
            $sql->bindParam(':right', $this->right);
            $sql->bindParam(':prog', $this->prog);
            $sql->bindParam(':cons', $this->cons);

            if (!$sql->execute()) return false;

            return true;

        }

        function delete() {

            $sql = $this->conn->prepare("
                DELETE FROM `spectrum` WHERE `party_id` = :id
            ");

            $sql->bindParam(':id', $this->id);

            if (!$sql->execute()) return false;

            $sql = $this->conn->prepare("
                DELETE FROM `parties` WHERE `id` = :id
            ");

            $sql->bindParam(':id', $this->id);

            if (!$sql->execute()) return false;

            return true;

        }

    }

?>