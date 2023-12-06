<?php
    
    class CategoryModel{

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

        public function __destruct()
        {
            // Close connection
            $this->conn->close();
        }

        public function createCategory($name){

            //Prepare statement to insert a category name
            $insertQuery = "INSERT INTO categories ('name') VALUES ('?')";
            $stmt = $this->conn->prepare($insertQuery);
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $stmt->close();

        }

        public function getCategoryById($id){

            // select all statement
            $sql = "SELECT * FROM catgories WHERE id = '$id'";
            $result = $this->conn->query($sql);
            return $result;

        }

        public function getAllCategories(){

            // select all statement
            $sql = "SELECT * FROM catgories";
            $result = $this->conn->query($sql);
            return $result;
            
        }

    }

?>