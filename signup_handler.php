<?php
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {
        die("Passwords do not match.");
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? OR email=?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        die("Username or Email already exists.");
    }

    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $insert = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $insert->bind_param("sss", $username, $email, $hashed);

    if ($insert->execute()) {
        header("Location: ../index.php?signup=success");
    } else {
        echo "Signup failed.";
    }
}
?>
