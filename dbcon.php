<?php 
$ServerName = "localhost";
 $pass = "";
 $userName = "root";
 $database = "fruitio";
 $connection = mysqli_connect($ServerName,$userName,$pass,$database);
if (!$connection)
    echo ("Error!!! Connection failed.");
?>