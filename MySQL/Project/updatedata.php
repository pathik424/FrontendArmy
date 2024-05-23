<?php


// Update Data Save Karayo

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_add = $_POST['saddres'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];


$conne = mysqli_connect("localhost", "root", "", "classes") or die("Connection Failed");

$sql2 = "UPDATE student SET sname='$stu_name',saddres='$stu_add',sclass='$stu_class',sphone='$stu_phone' WHERE sid = $stu_id";
// echo $sql2;
// exit;

$result = mysqli_query($conne, $sql2) or die('query Unsuccesfull');
// echo $result;
// exit;


header("Location: http://localhost/FrontendArmy/MySQL/Project/index.php");

mysqli_close($conn);

?>