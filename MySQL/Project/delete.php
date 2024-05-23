<?php
// Update Data Save Karayo

// echo "deletePage";

 $stu_id = $_GET['id'];



$conne = mysqli_connect("localhost", "root", "", "classes") or die("Connection Failed");

$sql2 = "DELETE FROM student WHERE sid = $stu_id";
// echo $sql2;
// exit;

$result = mysqli_query($conne, $sql2) or die('query Unsuccesfull');
// // echo $result;
// // exit;


header("Location: http://localhost/FrontendArmy/MySQL/Project/index.php");

// mysqli_close($conn);
?>