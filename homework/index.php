<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra yêu cầu vào công ty</title>
</head>
<body>
    <h1>Kiểm tra yêu cầu vào công ty</h1>
    <form action="result.php" method="get">
        <label for="gender">Giới tính:</label>
        <select id="gender" name="gender" required>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select><br>

        <label for="weight">Cân nặng (kg):</label>
        <input type="number" id="weight" name="weight" required><br>

        <label for="height">Chiều cao (cm):</label>
        <input type="number" id="height" name="height" required><br>

        <input type="submit" value="Kiểm tra yêu cầu">
    </form>
</body>
</html>