<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xếp loại học sinh -2121050429</title>
</head>
<body>
    <h1>Xếp loại học sinh</h1>
    <form method="POST" action="">
        <label for="toan">Toán:</label>
        <input type="number" name="toan" min="0" max="10" step="0.1" required><br>

        <label for="ly">Lý:</label>
        <input type="number" name="ly" min="0" max="10" step="0.1" required><br>

        <label for="hoa">Hóa:</label>
        <input type="number" name="hoa" min="0" max="10" step="0.1" required><br>

        <label for="tienganh">Tiếng Anh:</label>
        <input type="number" name="tienganh" min="0" max="10" step="0.1" required><br>

        <label for="van">Văn:</label>
        <input type="number" name="van" min="0" max="10" step="0.1" required><br>

        <label for="lichsu">Lịch Sử:</label>
        <input type="number" name="lichsu" min="0" max="10" step="0.1" required><br>

        <input type="submit" value="Xếp loại">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $toan = $_POST["toan"];
            $ly = $_POST["ly"];
            $hoa = $_POST["hoa"];
            $tienganh = $_POST["tienganh"];
            $van = $_POST["van"];
            $lichsu = $_POST["lichsu"];

            $diem_trung_binh = ($toan + $ly + $hoa + $tienganh + $van + $lichsu) / 6;

            if ($diem_trung_binh < 5 || $toan < 4 || $ly < 4 || $hoa < 4 || $tienganh < 4 || $van < 4 || $lichsu < 4) {
                echo "Xếp loại: Yếu";
            } elseif ($diem_trung_binh >= 5 && $diem_trung_binh <= 6.4) {
                echo "Xếp loại: Trung bình";
            } elseif ($diem_trung_binh >= 6.5 && $diem_trung_binh <= 7.9) {
                echo "Xếp loại: Khá";
            } elseif ($diem_trung_binh > 7.9) {
                echo "Xếp loại: Giỏi";
            }
        }
    ?>
</body>
</html>