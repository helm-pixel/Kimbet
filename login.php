<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/common.css"> <!-- Link to common styles -->
    <link rel="stylesheet" href="css/login.css"> <!-- Link to login-specific styles -->
</head>
<body>
    <div class="login-section">
        <h1>Login</h1>
        <form id="loginForm">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
    </div>

    <footer>
        <p>Contact Us | Address | Email | Phone</p>
    </footer>

    <script src="script.js"></script> <!-- Link to the JavaScript file -->
</body>
</html>
