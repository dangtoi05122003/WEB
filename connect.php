<<<<<<< HEAD
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
$conn->close();
=======
<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$db_name = "my_database";
// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $db_name);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Thiết lập bộ ký tự cho kết nối
mysqli_set_charset($conn, 'UTF8');

// Các câu truy vấn và xử lý dữ liệu có thể được thực hiện ở đây

// Đóng kết nối
$conn->close();
>>>>>>> 58011221429aaad65015e1731d5a3a7f9849fef1
?>