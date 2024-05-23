<?php
// Update Data Save Karayo

// echo "deletePage";

 $user_id = $_GET['id'];



$conne = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");

$sql2 = "DELETE FROM user WHERE user_id = $user_id";
// echo $sql2;
// exit;

$result = mysqli_query($conne, $sql2) or die('query Unsuccesfull');
// // echo $result;
// // exit;


header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/users.php");

mysqli_close($conne);
?>