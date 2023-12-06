<<<<<<< HEAD
<?php
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flights";
      require 'login/ketnoi.php';
  $result = $conn->query($sql);
    print_r($result);
    $conn->close();
=======
<?php
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flights";
      require 'login/ketnoi.php';
  $result = $conn->query($sql);
    print_r($result);
    $conn->close();
>>>>>>> 58011221429aaad65015e1731d5a3a7f9849fef1
?>