<?php
    require '../Model/ExpenseModel.php';

    $ControllerObject = new ExpenseController();

    class ExpenseController{

        private $ExpenseObject;

        public function __construct()
        {
            $this->ExpenseObject = new ExpenseModel();
        }

        //implement form actions and interact with model methods

        public function addExpenseAction(){

            // Validate form data
            $errors = [];

            // Validate amount
            if (empty($amount)) {
                $errors[] = "Amount is required.";
            }

            // Validate date
            if (empty($date)) {
                $errors[] = "date is required.";
            }

            // Validate Category ID
            if (empty($category_id)){
                $errors[] = "Category ID is required.";
            }
            
            if(empty($errors)){
                $amount = htmlspecialchars(trim($_POST['amount']));
                $date = htmlspecialchars(trim($_POST['date']));
                $category_id = htmlspecialchars(trim($_POST['category_id']));

                $this->ExpenseObject->createExpense($amount, $date, $category_id);
            }

        }

        public function editExpenseAction($id){

            // Validate form data
            $errors = [];

            // Validate id
            if(empty($id)) {
                $errors[] = "ID is required";
            }

            // Validate amount
            if (empty($amount)) {
                $errors[] = "Amount is required.";
            }

            // Validate date
            if (empty($date)) {
                $errors[] = "Date is required.";
            }

            // Validate Category ID
            if (empty($category_id)) {
                $errors[] = "Category ID is required.";
            }

            if(empty($errors)){
                $id = htmlspecialchars(trim($_POST['id']));
                $amount = htmlspecialchars(trim($_POST['amount']));
                $date = htmlspecialchars(trim($_POST['date']));
                $category_id = htmlspecialchars(trim($_POST['category_id']));

                $this->ExpenseObject->updateExpense($id, $amount, $date, $category_id);
            }

        }

        public function deleteExpenseAction($id){

            $this->ExpenseObject->deleteExpense($id);

        }

        public function viewExpensesAction(){
            //retrieve all expenses and render a list view
            $this->ExpenseObject->getAllExpenses();

        }

        public function generateExpenseReportAction(){

            //report!
            
        }

    }

    //instantiate object and call up functions from the model object
    //the methods above only accept and validate the form inputs

    $ControllerObject = new ExpenseController();

    if (isset($_POST['add_expense'])) {
        
        $ControllerObject->addExpenseAction();

    }

    if(isset($_POST['edit_expense'])){

        $ControllerObject->editExpenseAction($id);

    }

?>