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
$transaction_date = $_POST['transaction_date'];
$transaction_amount = $_POST['transaction_amount'];

// Kiểm tra xem giá trị customer_id có tồn tại trong bảng Customers hay không
$check_customer_query = "SELECT customer_id FROM Customers WHERE customer_id = $customer_id";
$check_customer_result = $conn->query($check_customer_query);

if ($check_customer_result->num_rows > 0) {
    // Lưu thông tin giao dịch
    $sql = "INSERT INTO Transactions (customer_id, transaction_date, transaction_amount) VALUES ('$customer_id', '$transaction_date', '$transaction_amount')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Thêm thông tin giao dịch thành công";
    } else {
        echo "Lỗi: " . $conn->error;
    }
} else {
    echo "Khách hàng không tồn tại";
}

// Đóng kết nối
$conn->close();
?>