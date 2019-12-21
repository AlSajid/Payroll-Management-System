<?php

$connect = mysqli_connect("localhost", "root", "", "PMS");

if (!$connect) 
  die("Cannot connect to database<br> Error: " . mysqli_connect_error());

$code = $_POST['code'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$joining = $_POST['joining'];
$designation = $_POST['designation'];
$grade = $_POST['grade'];
$loan = $_POST['loan'];
$basic = $_POST['basic'];
$allowance = $_POST['allowance'];

$sql = "UPDATE employee SET `name` = '$name', `address`= '$address', `phone number` = '$phone',	`joining date` = '$joining', `designation`='$designation', `grade`='$grade', `loan`='$loan', `basic`='$basic', `house allowance`='$allowance' WHERE `code`= '$code'";

if (mysqli_query($connect, $sql)) {
  header("location: index.php");
} else {
  echo "<br>Error: " . mysqli_error($connect);
}

mysqli_close($connect);