<?php

// echo "save Data File";
// Data Save Karayo

$stu_name = $_POST['sname'];
$stu_add = $_POST['saddres'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost", "root", "", "classes") or die("Connection Failed");

$sql = "INSERT INTO student(sname,saddres,sclass,sphone) VALUES('{$stu_name}','{$stu_add}','{$stu_class}','{$stu_phone}')";
// echo $sql;
// exit;
$result = mysqli_query($conn, $sql) or die('query Unsuccesfull');

header("Location: http://localhost/FrontendArmy/MySQL/Project/index.php");

mysqli_close($conn);

?>