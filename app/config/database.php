<?php

    class Database {

        private $host = "185.182.57.29";
        private $db_name = "bradlim299_stemadvies";
        private $username = "bradlim299_stemadvies";
        private $password = "MAJAphErsuRS";

        public $conn;

        public function getConnection() {

            $this->conn = null;
 
            try {

                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {

                echo "Connection error: " . $e->getMessage();

            }
    
            return $this->conn;

        }
    }
    
?>