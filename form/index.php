<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "dbhelper.php";
$_SESSION['form_token'] = bin2hex(random_bytes(32));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empowerment and Reaffirmation of Paternal Abilities Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }
        .header-logos {
            max-height: 120px;
        }
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        h1 {
            margin: 20px 0;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="logo-container">
            <img src="http://localhost/form/img/logo1.png" class="header-logos img-fluid">
            <img src="http://localhost/form/img/logo2.jpg" class="header-logos img-fluid">
           <center> <h6>REPUBLIC OF THE PHILIPPINES<br>CITY OF CEBU<br>DEPARTMENT OF SOCIAL WELFARE AND SERVICES</h6></center>
            <img src="http://localhost/form/img/logo3.png" class="header-logos img-fluid">
            <img src="http://localhost/form/img/logo4.jpg" class="header-logos img-fluid">
        </div>

        <h1 class="text-center">Manage Registration</h1>

        <div class="card p-4">
            <div class="text-center">
                <a href="view_details.php" class="btn btn-custom mb-3">View Registered Users</a>
                <br>
                <a href="add.php" class="btn btn-custom">Add New User</a>
            </div>
        </div>
    </div>
</body>
</html>