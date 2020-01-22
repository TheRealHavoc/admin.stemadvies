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

        function getSingle() {

            $sql = $this->conn->prepare("
                SELECT `username` FROM `users` WHERE `username` = :username
            ");

            $sql->bindParam(':username', $this->username);

            if (!$sql->execute()) return false;

            if (empty($res = $sql->fetch())) return false;

            return $res;

        }

        function getSingleById() {

            $sql = $this->conn->prepare("
                SELECT `username` FROM `users` WHERE `id` = :id
            ");

            $sql->bindParam(':id', $this->id);

            if (!$sql->execute()) return false;

            if (empty($res = $sql->fetch())) return false;

            return $res;

        }

        function delete() {

            $sql = $this->conn->prepare("
                DELETE FROM `users` WHERE `id` = :id
            ");

            $sql->bindParam(':id', $this->id);

            if (!$sql->execute()) return false;

            return true;

        }

    }

?>