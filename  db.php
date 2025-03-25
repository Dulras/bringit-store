<?php
$host = "localhost";
$dbname = "admin_panel";
$username = "root";
$password = ""; // ضع كلمة المرور إذا كانت لديك

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
