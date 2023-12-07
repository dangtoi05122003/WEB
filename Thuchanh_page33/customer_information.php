<?php
$customerId = "zakart";
$startDate = '2023-07-12';
$endDate = '2023-07-15';

require_once "connect.php";

$stmt = $conn->prepare("SELECT * FROM transactions WHERE customer_id = ? AND transaction_date BETWEEN ? AND ? LIMIT 0, 25");
$stmt->bind_param("sss", $customerId, $startDate, $endDate);
$stmt->execute();
$result = $stmt->get_result();
$results = $result->fetch_all(MYSQLI_ASSOC);
?>