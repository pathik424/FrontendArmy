<?php


// Data Save Karayo

echo $stu_name = $_POST['sname'];
echo $stu_add = $_POST['saddres'];
echo $stu_class = $_POST['sclass'];
echo $stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost", "root", "", "classes") or die("Connection Failed");

$sql = "INSERT INTO student(sname,saddres,sclass,sphone) VALUES('{$stu_name}','{$stu_add}','{$stu_class}','{$stu_phone}')";

$result = mysqli_query($conn, $sql) or die('query Unsuccesfull');

header("Location: http://localhost/Frontend%20Army/MySQL/Project/index.php");

mysqli_close($conn);

?>