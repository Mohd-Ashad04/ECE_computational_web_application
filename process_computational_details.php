<!DOCTYPE html>
<html>
<head>
    <title>Computational Item Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        nav {
            background-color:#09396d;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center; 
        }

        h1, h2, h3 {
            text-align: center;
            color: #333;
        }

        .section {
            margin-top: 30px;
        }

        .section h2 {
            margin-bottom: 20px;
            color: #555;
        }

        .section p {
            line-height: 1.6;
            color: #666;
        }

        ul, ol {
            margin-left: 20px;
            color: #666;
        }

        form {
            text-align: left; 
            max-width: 300px; 
            margin: 0 auto; 
        }

        label {
            display: block;
            margin-bottom: 10px;
            text-align: left; /* Align labels to the left */
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        a {
            color: #2990fd;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<nav>
        <a href="home.php">Home</a>
        <a href="process_computational_details.php">Computational Details</a>
        <a href="process_faculty_details.php">Faculty Details</a>
        <a href="process_lab_details.php">Lab Details</a>
        <a href="process_lab_incharge.php">Lab Incharges</a>
        <a href="login_process.php">Login</a>
        <a href="process_signup.php">Sign up</a>
    </nav>

<h2>Add New Item</h2>
<form method="post" action="./insert.php">
    Room No: <input type="text" name="roomNo"><br>
    Name: <input type="text" name="name"><br>
    Laptop Model: <input type="text" name="laptopModel"><br>
    PC Model: <input type="text" name="pcModel"><br>
    Printer Model: <input type="text" name="printerModel"><br>
    Graphic Tablet Model: <input type="text" name="tabletModel"><br>
    <input type="submit" value="Add">
    <a href="./display-items.php"><b>View Data</b></a>
</form>

<?php
require("./connection.php");
?>