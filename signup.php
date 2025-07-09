<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f6f9fc, #e0eafc);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .signup-box {
            background-color: #ffffff;
            padding: 40px 35px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
            font-weight: normal;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        input:focus {
            border-color: #aac8ff;
            box-shadow: 0 0 5px rgba(170, 200, 255, 0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #6c9eff;
            color: white;
            font-size: 16px;
            font-weight: 500;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #4f83ff;
        }

        a {
            display: inline-block;
            margin-top: 18px;
            color: #444;
            font-size: 14px;
            text-decoration: none;
        }

        a:hover {
            color: #111;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-box">
        <h2>Signup</h2>
        <form method="post" action="includes/signup_handler.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Signup</button>
        </form>
        <a href="index.php">Already have an account? Login</a>
    </div>
</body>
</html>
