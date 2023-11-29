<!DOCTYPE html>
<html>
<head>
    <title>2121050429</title>
</head>
<body>
    <h1>Select a Date</h1>

    <form method="POST" action="">
        <select name="day">
            <?php
            // Generate options for days from 1 to 31
            for ($day = 1; $day <= 31; $day++) {
                echo "<option value='$day'>$day</option>";
            }
            ?>
        </select>

        <select name="month">
            <?php
            // Generate options for months from 1 to 12
            for ($month = 1; $month <= 12; $month++) {
                echo "<option value='$month'>$month</option>";
            }
            ?>
        </select>

        <select name="year">
            <?php
            $today = getdate();
            $curYear = $today["year"];

            // Generate options for years from 1900 to current year
            for ($year = 1900; $year <= $curYear; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
        $selectedDay = $_POST['day'];
        $selectedMonth = $_POST['month'];
        $selectedYear = $_POST['year'];
        echo "<h2>You selected the date: $selectedDay/$selectedMonth/$selectedYear</h2>";
    }
    ?>
</body>
</html>