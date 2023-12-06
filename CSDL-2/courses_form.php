<!DOCTYPE html>
<html>
<head>
    <title>Biểu mẫu nhập học phần</title>
</head>
<body>
    <h2>Biểu mẫu nhập học phần</h2>
    <form method="POST" action="courses.php">
        <label for="course_name">Tên học phần:</label>
        <input type="text" name="course_name" id="course_name" required><br><br>

        <label for="course_credit">Mã học phần:</label>
        <input type="text" name="course_credit" id="course_credit" required><br><br>

        <input type="submit" value="Lưu thông tin">
    </form>
</body>
</html>