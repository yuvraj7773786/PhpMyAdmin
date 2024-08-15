<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="sample.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="connect.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" required name="username">
            <label for="password">Password</label>
            <input type="text" id="password" required name="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>