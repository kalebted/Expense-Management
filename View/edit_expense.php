<?php
    require "Controller/Controller.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Expense</title>
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
            margin: 20px auto;
            padding: 20px;
            width: 50%;
            border: 2px solid #555;
            border-radius: 10px;
            height: fit-content;
            min-height: 420px;
        }

        h1 {
            text-align: center;
        }

        form {
            /* center the form */
            margin: 0 auto;
            width: 100%;
            /* add some padding and border */
            padding: 20px;
            border: 2px solid white;
            /* use a rounded corner */
            border-radius: 10px;
            /* use a white background */
            background: white;
            /* use the custom font */
            font-family: 'Roboto', sans-serif;
        }

        label {
            /* display the label and input on the same line */
            display: inline-block;
            width: 20%;
            text-align: right;
        }

        input {
            width: 300px;
            height: 30px;
            /* add some space between the label and input */
            margin-left: 10px;
            /* use a rounded border */
            border-radius: 5px;
            /* use a light blue border color */
            border: 1px solid #00c6ff;
        }

        input[type=submit] {
            width: 80px;
            height: 30px;
            /* align the submit button to the right */
            margin-left: 40%;
            /* use a gradient background */
            background: linear-gradient(to right, #00c6ff, #0072ff);
            /* use a white text color */
            color: white;
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
            <h1>Edit Expense</h1>

            <form action="Controller/Controller.php" method="POST">
                <label for="id">ID:</label>
                <input type="number" name="expense_id" id="id"><br><br>
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" required><br><br>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required><br><br>
                <label for="category">Category ID:</label>
                <input type="number" id="category" name="category" min="1" max="5" required><br><br>
                <input type="submit" value="Submit" name="edit_expense">
            </form>
        </div>

        <div class="footer">
            <p>© 2023 Expense Management System. All rights reserved.</p>
        </div>
    </div>
</body>

</html>