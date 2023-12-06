<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost"; // Địa chỉ máy chủ MySQL
$username = "your_username"; // Tên người dùng MySQL
$password = "your_password"; // Mật khẩu MySQL
$dbname = "mydb"; // Tên cơ sở dữ liệu

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu
$course_name = $_POST['course_name'];
$course_credit = $_POST['course_credit'];

// Thực hiện lệnh INSERT để thêm học phần vào bảng "courses"
$insert_query = "INSERT INTO courses (course_name, course_credit) VALUES ('$course_name', '$course_credit')";

if ($conn->query($insert_query) === TRUE) {
    echo "Học phần đã được lưu thành công.";
} else {
    echo "Lỗi: " . $insert_query . "<br>" . $conn->error;
}

$conn->close();
?>