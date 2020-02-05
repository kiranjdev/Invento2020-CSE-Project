<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/db_connect.php';
?>

<html lang="en">

<head>
  <title>Project</title>
</head>

<body>
        <?php
    $mysqli = OpenCon();
     $sql = "SELECT name FROM labs WHERE sem=6 AND active=1";
     $result = mysqli_query($mysqli, $sql);
     while ($row = mysqli_fetch_assoc($result)) {
         echo $row['name']."<br>";
     }
    CloseCon($mysqli);
 ?>

</body>
</html>
