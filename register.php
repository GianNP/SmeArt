<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftarkan diri anda | SmeArt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background-color: #F0F8FF ;
            border: 1px solid #dbdbdb;
            padding: 20px;
            width: 350px;
            text-align: center;
        }
        .signup-container img {
            margin-bottom: 20px;
        }
        .signup-container h2 {
            font-size: 17px;
            color: #8e8e8e;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            box-sizing: border-box;
            background-color: #fafafa;
        }
        button {
            width: 100%;
            background-color: #0095f6;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0084d1;
        }
        .login-link {
            margin-top: 20px;
            font-size: 14px;
        }
        .login-link a {
            color: #0095f6;
            text-decoration: none;
            font-weight: bold;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <img src="img/logo.png" alt="Instagram Logo" width="180px">
    <h2>Daftar untuk melihat apa yang terjadi di SMAKANZA.</h2>
    <form action="#" method="post" enctype="multipart.form-data">
        <input type="email" name="email" placeholder="Mobile Number atau Email" required>
        <input type="text" name="fullname" placeholder="Nama lengkap" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Daftar</button>
    </form>
    <div class="login-link">Sudah punya akun?<a href="login.php">Log in</a>
    </div>
</div>

</body>
</html>
