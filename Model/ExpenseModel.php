<?php
    
    class ExpenseModel {

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

        public function createExpense($amount, $date, $categoryID){

            // Prepare and execute MySQL statement to insert data into the table
            $insertQuery = "INSERT INTO expenses (amount, date, category_id) VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($insertQuery);
            $stmt->bind_param("sss", $amount, $date, $categoryID);
            $stmt->execute();
            $stmt->close();

        }

        public function getExpenseById($id){

            // Prepare and execute MySQL statement to get expense by id from the table
            $sql = "SELECT * FROM expenses WHERE id = '$id' ";
            $result = $this->conn->query($sql);
            return $result;

        }

        public function updateExpense($id, $amount, $date, $categoryId){

            // Prepare and execute MySQL statement to edit expense using ID
            $insertQuery = "UPDATE expenses SET amount = '?', date = '?', category_id = '?' WHERE id = '?' ";
            $stmt = $this->conn->prepare($insertQuery);
            $stmt->bind_param("ssss", $amount, $date, $category_id, $id);
            $stmt->execute();
            $stmt->close();

        }

        public function deleteExpense($id){

            // Prepare and execute MySQL statement to delete expense by id from the table
            $insertQuery = "DELETE FROM expenses WHERE id = '?' ";
            $stmt = $this->conn->prepare($insertQuery);
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $stmt->close();

        }

        public function getAllExpenses(){

            // select all statement
            $sql = "SELECT * FROM expenses";
            $result = $this->conn->query($sql); //the result variable can be manipulated in other file
            return $result;
            
        }
    }
?>