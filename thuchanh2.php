<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chuyển đổi ngoại tệ sang VND</title>
</head>
<body>
    <h1>Chuyển đổi ngoại tệ sang VND</h1>

    <form method="POST" action="">
        <label for="currency">Chọn loại ngoại tệ:</label>
        <select name="currency" id="currency">
            <option value="USD">USD</option>
            <option value="AUD">AUD</option>
            <option value="JPY">JPY</option>
            <option value="EUR">EUR</option>
        </select>
        <br>
        <label for="amount">Nhập số tiền:</label>
        <input type="number" name="amount" id="amount" min="0" step="0.01">
        <br>
        <input type="submit" value="Chuyển đổi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $currency = $_POST["currency"];
        $amount = $_POST["amount"];

        // Tỷ giá chuyển đổi
        $exchangeRate = 0;
        switch ($currency) {
            case "USD":
                $exchangeRate = 23000;
                break;
            case "AUD":
                $exchangeRate = 17000;
                break;
            case "JPY":
                $exchangeRate = 200;
                break;
            case "EUR":
                $exchangeRate = 27000;
                break;
        }

        // Chuyển đổi sang VND
        $convertedAmount = $amount * $exchangeRate;

        // Hiển thị kết quả
        echo "<p>Số tiền $amount $currency tương đương với $convertedAmount VND</p>";
    }
    ?>
</body>
</html>