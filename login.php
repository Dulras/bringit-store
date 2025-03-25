<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    if ($admin && hash('sha256', $password) === $admin['yourpassword']) {
        $_SESSION['admin'] = $admin['username'];
        echo "success";
    } else {
        echo "error";
    }
}
?>
