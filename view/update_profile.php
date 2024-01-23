<?php
session_start();

if (!isset($_SESSION['user_details'])) {
    echo "Please login to your profile!";
    exit();
}
$userDetails = $_SESSION['user_details'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .update-profile-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            text-align: center;
        }
        label {
            display: block;
            text-align: left;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>
<body>

<div class="update-profile-container">
    <h2>Update Profile</h2>
    <form action="../controller/process_updateProfile.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" value="<?php echo $userDetails['firstName']; ?>" required>
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" value="<?php echo $userDetails['lastName']; ?>" required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $userDetails['email']; ?>" required>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo $userDetails['password']; ?>" required>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value="<?php echo $userDetails['gender']; ?>" required>
        <label for="hobbies">Hobbies:</label>
        <input type="text" id="hobbies" name="hobbies" value="<?php echo $userDetails['hobbies']; ?>" required>
        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="<?php echo $userDetails['department']; ?>" required>

        <button type="submit" name="updateProfile">Update Profile</button>
    </form>

    <a href="../dashboard.php">Back to Dashboard</a>
</div>

</body>
</html>
