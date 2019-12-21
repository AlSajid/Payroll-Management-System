<?php

$connect = mysqli_connect("localhost", "root", "", "PMS");

if (!$connect) 
  die("Cannot connect to database<br> Error: " . mysqli_connect_error());

$code = rand(100, 10000);
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$joining = $_POST['joining'];
$designation = $_POST['designation'];
$grade = $_POST['grade'];
$loan = $_POST['loan'];
$basic = $_POST['basic'];
$allowance = $_POST['allowance'];

$sql = "INSERT INTO `employee` (`code`,	`name`,	`address`,	`phone number`,	`joining date`,	`designation`,	`grade`,	`loan`,	`basic`,	`house allowance`)
        VALUES ('$code', '$name', '$address', '$phone', '$joining', '$designation', '$grade', '$loan', '$basic', '$allowance')";

if (mysqli_query($connect, $sql)) {
  header("location: index.php");
} else {
  echo "<br>Error: " . mysqli_error($connect);
}

mysqli_close($connect);
