<?php
// Update Data Save Karayo

// echo "deletePage";

 $post_id = $_GET['id'];



$conne = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");


unlink('upload/post'.$row['post_img']);

$sql2 = "DELETE FROM post WHERE post_id = $post_id";
// echo $sql2;
// exit;

$result = mysqli_query($conne, $sql2) or die('query Unsuccesfull');
// // echo $result;
// // exit;


header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/post.php");

mysqli_close($conne);
?>