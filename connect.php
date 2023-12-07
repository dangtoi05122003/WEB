
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

echo "Kết nối thành công";

// Thực hiện truy vấn hoặc thao tác với cơ sở dữ liệu ở đây

// Đóng kết nối
?>