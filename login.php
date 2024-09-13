<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke akun anda | SmeArt</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #F0F8FF;
            border: 1px solid #dbdbdb;
            padding: 40px 20px;
            text-align: center;
            width: 350px;
            border-radius: 8px;
        }
        .login-container img {
            width: 175px;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #fafafa;
        }
        button {
            width: 100%;
            background-color: #0095f6;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #0084d1;
        }
        .or {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }
        .or::before, .or::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: #dbdbdb;
        }
        .or::before {
            margin-right: 10px;
        }
        .or::after {
            margin-left: 10px;
        }
        .or span {
            font-size: 13px;
            color: #8e8e8e;
            font-weight: bold;
        }
        .login-container a {
            color: #0095f6;
            font-size: 14px;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src="img/logo.png" alt="Instagram Logo">
    <form action="#" method="post">
        <input type="text" placeholder="Username atau Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Log In</button>
    </form>
    <div class="or">
        <span>ATAU</span>
    </div>
    <a href="register.php">Belum punya akun? Daftar</a>
    <div style="margin-top: 20px;">
        <a href="#">Lupa password?</a>
    </div>
</div>

</body>
</html>
