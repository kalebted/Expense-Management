<?php

    class Conn{
        // Database connection
        private $servername = "localhost"; 
        private $username = "root"; 
        private $password = ""; 
        private $dbname = "expense_management";
        private $conn;

        public function __construct()
        {
            // Create a new connection
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            
            // Check connection
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    }

?>