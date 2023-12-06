<!-- customer_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Customer Form</title>
</head>
<body>
    <h2>Customer Information</h2>
    <form action="save_customer.php" method="POST">
        <label for="id">id:</label>
        <input type="text" name="customer_id" id="id" required><br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="address">address:</label>
        <input type="tel" name="address" id="address" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" required><br><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>