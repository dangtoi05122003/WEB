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
$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];
$grade_value = $_POST['grade_value'];

// Kiểm tra xem student_id có tồn tại trong bảng students hay không
$check_query = "SELECT * FROM students WHERE student_id = '$student_id'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
    // Thực hiện lệnh INSERT khi student_id tồn tại trong bảng students
    $insert_query = "INSERT INTO grades (student_id, course_id, grade_value) VALUES ('$student_id', '$course_id', '$grade_value')";
  
    if ($conn->query($insert_query) === TRUE) {
        echo "Grades saved successfully.";
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
} else {
    echo "Error: Invalid student_id.";
}

$conn->close();
?>