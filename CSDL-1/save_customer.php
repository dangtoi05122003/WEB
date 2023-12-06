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

// Lấy dữ liệu từ biểu mẫu
$customer_id = $_POST['customer_id'];
$customer_name = $_POST['name'];
$customer_address = $_POST['address'];
$customer_phone = $_POST['phone'];

// Lưu thông tin khách hàng
$sql = "INSERT INTO Customers (customer_name, customer_address, customer_phone) VALUES ('$customer_name', '$customer_address', '$customer_phone')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm thông tin khách hàng thành công";
} else {
    echo "Lỗi: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>