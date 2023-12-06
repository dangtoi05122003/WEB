<!DOCTYPE html>
<html>
<head>
    <title>Biểu Mẫu</title>
</head>
<body>
    <h2>Biểu Mẫu</h2>

    <form action="grades.php" method="POST">
        <label for="student_id">Student ID:</label>
        <input type="text" name="student_id" id="student_id" required><br><br>

        <label for="course_id">Course ID:</label>
        <input type="text" name="course_id" id="course_id" required><br><br>

        <label for="grade_value">Grade Value:</label>
        <input type="text" name="grade_value" id="grade_value" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>