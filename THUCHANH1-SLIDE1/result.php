<!-- Trang kết quả -->
<!DOCTYPE html>
<html>
<head>
    <title>Kết quả đăng ký</title>
</head>
<!--DXT-->
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "Tên đăng nhập: " . $username . "<br>";
        echo "Mật khẩu: " . $password;
    } else {
        echo "Vui lòng điền thông tin đăng ký.";
    }
    ?>
</body>
</html>