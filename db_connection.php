<?php
$servername = "localhost"; 
$username = "root";
$password = "root";
$dbname = "mail";

try {
    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch (PDOException $e) {
    // Bắt lỗi kết nối và hiển thị
    echo "Connection failed: " . $e->getMessage();
}

?>

