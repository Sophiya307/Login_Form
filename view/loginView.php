<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="login-container">
        <form id="loginForm" action="../index.php" method="post">
            <h2>Login Form</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
    <script src="../assets/script.js"></script>
</body>
</html>
