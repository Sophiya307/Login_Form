<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex; 
            justify-content: center;
        }
        .login-success {
            
            font-weight: bold;
            font-size: 40px;
        }

        .error-message {
            margin-top: 10px;
            font-weight: bold;
            font-size: 40px;
        }
    </style>
</head>
<body>

<?php
include('./model/dbConnection.php');
include('./controller/loginController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['username'];
    $password = $_POST['password'];

    $loginController = new LoginController($conn);

    if ($loginController->authenticateUser($firstName, $password)) {
        header("Location: dashboard.php");
        exit(); 
    } else {
        echo "<p class='error-message'>Invalid credentials!</p>";
    }
} else {
    include('./view/loginView.php');
}
?>


</body>
</html>
