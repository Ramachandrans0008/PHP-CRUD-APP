<?php

include ("db.php");


$delete = $_GET['del'];
$sql = "DELETE FROM student WHERE id = '$delete'";
$result = mysqli_query($conn,$sql); 

if ($result) {
    header('Location:index.php');
   } else {
    echo "Some thing Error" .mysqli_error($conn);
   }



?>


