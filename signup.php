<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup Form</title>
<style>
    body {
        width: 100vw;
        height: 100vh;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        background-color: #000000;
    }
    .container {
        width: 280px;
        margin: 0 auto;
        padding: 20px;
        color: white;
        border: none;
        border-radius: 5px;
        background-color: #242424;
    }
    .container h2 {
        text-align: center;
    }
    .container input[type="text"],
    .container input[type="password"],
    .container input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .container input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    .container input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Signup Form</h2>
    <form action="process.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="key">Key</label>
        <input type="text" id="key" name="key" required>

        <input type="submit" value="register" name="register">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>
