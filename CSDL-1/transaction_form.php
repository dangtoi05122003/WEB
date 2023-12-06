<!DOCTYPE html>
<html>
<head>
    <title>Form transaction</title>
</head>
<body>
    <h2>Biểu mẫu Giao dịch</h2>
    <form action="save_transaction.php" method="POST">
        <label for="customer_id">Mã khách hàng:</label>
        <input type="text" id="customer_id" name="customer_id" required><br><br>

        <label for="transaction_date">Ngày giao dịch:</label>
        <input type="date" id="transaction_date" name="transaction_date" required><br><br>

        <label for="transaction_amount">Số tiền giao dịch:</label>
        <input type="text" id="transaction_amount" name="transaction_amount" required><br><br>

        <input type="submit" value="Lưu giao dịch">
    </form>
</body>
</html>