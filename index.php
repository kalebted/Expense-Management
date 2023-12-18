<!DOCTYPE html>
<html lang="en">
<?php 
    //print_r(explode("/", $_GET['url']));

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS Home</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 20px;
            font-size: 24px;
            text-align: center;
        }

        .nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #eee;
            padding: 10px;
        }

        .nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .nav a:hover {
            color: #555;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
            min-height: 420px;
        }

        .card {
            width: 40%;
            min-width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            margin: 15px;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card h3 {
            padding: 20px;
            text-align: center;
            color: #333;
        }

        .card p {
            padding-left: 25px;
            padding-top: 15px;
            color: #555;
            line-height: 1.5;
        }

        .card button {
            display: block;
            width: 80%;
            margin: 20px auto;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        .card button:hover {
            background-color: #555;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Expense Management System</h1>
            <p>Track and manage your expenses easily</p>
        </div>
        <!-- <div class="nav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Features</a>
            <a href="#">Contact</a>
        </div> -->
        <div class="content">
            <div class="card">
                <!-- <img src="https://i.imgur.com/9vYX4Zm.jpg" alt="Receipts"> -->
                <h3>Add Expense</h3>
                <p>Record your expense into the system via form.</p>
                <button onclick="location.href = 'View/add_expense.php'">Add Expense</button>
            </div>
            <div class="card">
                <!-- <img src="https://i.imgur.com/6Q8LZx0.jpg" alt="Charts"> -->
                <h3>Edit Expense</h3>
                <p>You can edit an expense you have previously registered.</p>
                <button onclick="location.href = 'View/edit_expense.php'">Edit Expense</button>
            </div>
            <div class="card">
                <!-- <img src="https://i.imgur.com/8QF0w9n.jpg" alt="Budget"> -->
                <h3>Expense List</h3>
                <p>Get a quick list of expenses you have recorded in the system.</p>
                <button onclick="location.href = 'View/expense_list.php'">Show List</button>
            </div>
            <div class="card">
                <!-- <img src="https://i.imgur.com/8QF0w9n.jpg" alt="Budget"> -->
                <h3>Expense Report</h3>
                <p>Generate a report of all recorded expenses in the database.</p>
                <button onclick="location.href = 'View/expense_report.php'">Generate Report</button>
            </div>
        </div>
        <div class="footer">
            <p>© 2023 Expense Management System. All rights reserved.</p>
        </div>
    </div>
</body>

</html>