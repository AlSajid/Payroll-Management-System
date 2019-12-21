<?php
$connect = mysqli_connect("localhost", "root", "", "PMS");

if (!$connect) 
  die("Cannot connect to database<br> Error: " . mysqli_connect_error());


$sql = "DELETE FROM employee WHERE code = ".$_GET['code']."";

if (mysqli_query($connect, $sql)) 
     header("location: index.php");
else 
    echo "Error: " . $connect->error;

?>