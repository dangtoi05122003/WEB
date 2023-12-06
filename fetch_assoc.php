<?php
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flights";
      require 'login/ketnoi.php';
  $result = $conn->query($sql);
    print_r($result);
    $conn->close();
?>