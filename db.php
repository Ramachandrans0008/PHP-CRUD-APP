<?php

$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "cruddb";

try {
    $conn = mysqli_connect($db_server,$db_username,$db_password,$db_name);
    if ($conn) {
      
    }
}catch (mysqli_sql_exception) {
    echo "could not connect";
}

?>


