<?php

    class Statement {

        private $conn;

        public $id;
        public $statement;
        public $enabled;

        private $created_on;
        private $last_edited;

        public function __construct($db) {
            $this->conn = $db;
        }

        function getAll() {

            $sql = $this->conn->prepare("
                SELECT `id`, `statement`, `created_on`, `last_edited` FROM `statements`
            ");

            if (!$sql->execute()) return false;

            if (empty($res = $sql->fetchall())) return false;

            return $res;

        }

    }

?>