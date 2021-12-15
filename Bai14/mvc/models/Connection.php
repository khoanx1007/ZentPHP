<?php
    class Connection{
        private $severname = "localhost:3307";
        private $username = "root";
        private $password = "123456";
        private $dbname="blog";

        public function connect(){
            $conn = new mysqli($this->severname,$this->username,$this->password,$this->dbname);
            if ($conn->connect_errno){
                echo "Failed to connect to SQL: " . $conn->connect_errror;
                exit();
            }
            return $conn;
        }
    }
?>