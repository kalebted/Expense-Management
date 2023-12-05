<?php

    class Conn{
        // Database connection
        private $servername = "localhost"; 
        private $username = "root"; 
        private $password = ""; 
        private $dbname = "expense_management"; 

        public function __construct()
        {
            // Create a new connection
            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        }
    }

?>