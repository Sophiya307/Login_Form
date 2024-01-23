<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex; 
            justify-content: center;
        }

        .dashboard-container {
            text-align: center;
            padding-top: 0px;
        }

        .user-details {
            font-size: 20px;
            margin-bottom: 10px; 
            align-items:center;
        }
        .logout-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .update-btn {
            position: absolute;
            top: 10px;
            right: 100px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <?php
    session_start();
    if (!isset($_SESSION['user_details'])) {
        echo "Please login to see the page";
        exit();
    }
    if (isset($_SESSION['user_details'])) {
        $userDetails = $_SESSION['user_details'];
        echo "<div class='user-details'>
        <h1>Welcome to Dashboard!!</h1>
        <h4>Your details</h4>
                <p>First Name: {$userDetails['firstName']}</p>
                <p>Last Name: {$userDetails['lastName']}</p>
                <p>Email: {$userDetails['email']}</p>
                <p>Password: {$userDetails['password']}</p>
                <p>Gender: {$userDetails['gender']}</p>
                <p>Hobbies: {$userDetails['hobbies']}</p>
                <p>Department: {$userDetails['department']}</p>
              </div>";
    } else {
        header("Location: ../view/loginView.php");
        exit();
    }
    ?>
    <a href="logout.php" class="logout-btn">Logout</a>
    <a href="view/update_profile.php" class="update-btn">Update Profile</a>
</div>
</body>
</html>
