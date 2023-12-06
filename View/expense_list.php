<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense List</title>
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

        </div>

        <div class="footer">
            <p>© 2023 Expense Management System. All rights reserved.</p>
        </div>
    </div>
</body>

</html>