<?php
$today = getdate();
$curYear = $today["year"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị đã chọn từ listbox
    $selectedYear = $_POST["year"];
    $selectedMonth = $_POST["month"];
    $selectedDay = $_POST["day"];
    echo "Bạn đã chọn ngày: " . $selectedDay . "/" . $selectedMonth . "/" . $selectedYear;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>2121050429</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="day">Chọn ngày:</label>
        <select name="day" id="day">
            <?php
            // Tạo danh sách các ngày từ 1 đến 31
            for ($day = 1; $day <= 31; $day++) {
                echo "<option value=\"$day\">$day</option>";
            }
            ?>
        </select>
        <br>
        <label for="month">Chọn tháng:</label>
        <select name="month" id="month">
            <?php
            // Tạo danh sách các tháng từ 1 đến 12
            for ($month = 1; $month <= 12; $month++) {
                echo "<option value=\"$month\">$month</option>";
            }
            ?>
        </select>
        <br>
        <label for="year">Chọn năm:</label>
        <select name="year" id="year">
            <?php
            // Tạo danh sách các năm từ 1900 đến năm hiện tại
            for ($year = 1900; $year <= $curYear; $year++) {
                echo "<option value=\"$year\">$year</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>