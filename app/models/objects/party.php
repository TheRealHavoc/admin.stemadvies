<?php

    class Party {

        private $conn;
        
        public $id;
        public $name;
        public $chairman;
        
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

        }

    }

?>