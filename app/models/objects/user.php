<?php

    class User {

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

        function getSingle() {

            $sql = $this->conn->prepare("
                SELECT `id`, `username`, `password`, `firstname`, `lastname` FROM `users` WHERE `username` = :username
            ");

            $sql->bindParam(':username', $this->username);

            if (!$sql->execute()) return false;

            if (empty($res = $sql->fetch())) return false;

            return $res;

        }

        function updateLastLogin() {

            $sql = $this->conn->prepare("
                UPDATE `users` SET `last_login` = :date WHERE `users`.`username` = :username
            ");

            $date = date('Y-m-d H:i:s');

            $sql->bindParam(':date', $date);
            $sql->bindParam(':username', $this->username);

            if (!$sql->execute()) return false;

            return true;

        }

    }

?>