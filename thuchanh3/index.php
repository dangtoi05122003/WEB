<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dự báo ngành trúng tuyển</title>
</head>
<body>
    <h1>Dự báo ngành trúng tuyển</h1>
    <form action="result.php" method="get">
        <label for="toan">Điểm Toán:</label>
        <input type="number" id="toan" name="toan" required><br>

        <label for="ly">Điểm Lý:</label>
        <input type="number" id="ly" name="ly" required><br>

        <label for="hoa">Điểm Hóa:</label>
        <input type="number" id="hoa" name="hoa" required><br>

        <input type="submit" value="Dự báo ngành trúng tuyển">
    </form>
</body>
</html>