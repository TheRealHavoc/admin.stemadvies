<?php

    class Account {

        private $conn;
        
        public $id;
        public $username;
        public $firstname;
        public $lastname;
        public $password;
        
        private $created_on;
        private $last_edited;
        private $last_login;

        public function __construct($db) {
            $this->conn = $db;
        }

        function getAll() {
            $sql = $this->conn->prepare("
                SELECT `id`, `username`, `firstname`, `lastname`, `created_on`, `last_edited`, `last_login` FROM `users`
            ");

            if (!$sql->execute()) return false;

            if (empty($res = $sql->fetchall())) return false;

            return $res;

        }

        function add() {

        }

    }

?>