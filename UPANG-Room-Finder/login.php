

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPang Room Search - Admin Login</title>
    <style>
        body {
            background: linear-gradient(to top, rgba(13, 54, 10, 1), rgba(27, 115, 27, 0.5)), url('upangbg.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            position: absolute;
            top: 20px;
            left: 30px;
            display: flex;
            align-items: center;
        }

        .logo {
            border-radius: 50%;
            width: 80px;
            height: 80px;
        }

        .title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #000000;
            margin-left: 10px;
        }

        .login-box {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 380px;
            text-align: center;
        }

        .login-box h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: black;
        }

        .login-box label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: gray;
            font-size: 14px;
        }

        .login-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            background-color: #1E90FF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-box button:hover {
            background-color: #187bcd;
        }

        .login-box .links {
            margin-top: 10px;
            font-size: 14px;
        }

        .login-box .links a {
            color: #1E90FF;
            text-decoration: none;
        }
       .login-box .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="phinmalogo.png" alt="University of Pangasinan logo" class="logo">
        <h1 class="title"> UPang Room Search </h1>
    </div>

    <div class="login-box">
        <h2> ADMIN LOGIN </h2>
        <form action="login_process.php" method="POST">
            <label for="email"> Email </label>
            <input type="text" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        <div class="links">
            <a href="#"> Forgot Password? </a>
        </div>
        <div class="links">
            <span>Don't have an account? </span><a href="signup.html">Sign Up</a>
        </div>
    </div>

</body>
</html>
