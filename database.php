<?php
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
?>