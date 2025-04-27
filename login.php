<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - MyShop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
    }

    .login-container input[type="email"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-container button {
      background-color: #ff9900;
      border: none;
      padding: 10px;
      width: 100%;
      border-radius: 4px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    .login-container button:hover {
      background-color: #e68a00;
    }

    .login-container p {
      margin-top: 15px;
      font-size: 14px;
    }

    .login-container a {
      color: #232f3e;
      text-decoration: none;
      font-weight: bold;
    }

    .login-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2>Login to MyShop</h2>
  <form action="login_process.php" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
  <p>Don't have an account? <a href="register.php">Register</a></p>
</div>

</body>
</html>
