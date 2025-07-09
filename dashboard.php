<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dashboard-box {
            background-color: #ffffff;
            padding: 30px;
            margin-top: 100px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            color: #007bff;
        }

        p {
            margin-top: 15px;
            font-size: 18px;
        }

        a.logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a.logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="dashboard-box">
        <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
        <p>This is your secure dashboard area.</p>
        <a class="logout-btn" href="logout.php">Logout</a>
    </div>
</body>
</html>
