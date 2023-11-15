<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết quả</title>
</head>
<body>
    <?php
        if (isset($_GET['toan']) && isset($_GET['ly']) && isset($_GET['hoa'])) {
            $toan = $_GET['toan'];
            $ly = $_GET['ly'];
            $hoa = $_GET['hoa'];

            $tong_diem = $toan + $ly + $hoa;

            $diem_chuan = [
                'CNTT' => 18,
                'CNTT chất lượng cao' => 22,
                'KHDL' => 18,
                'Địa chất' => 17,
                'Môi trường' => 15
            ];

            echo "<h1>Kết quả</h1>";
            echo "Tổng điểm của bạn: $tong_diem<br><br>";

            foreach ($diem_chuan as $nganh => $diem) {
                if ($tong_diem >= $diem) {
                    echo "Bạn đủ điều kiện vào ngành $nganh<br>";
                } else {
                    echo "Bạn không đủ điều kiện vào ngành $nganh<br>";
                }
            }
        } else {
            echo "<h1>Lỗi</h1>";
            echo "Vui lòng điền đầy đủ thông tin điểm môn học.";
        }
    ?>
</body>
</html>