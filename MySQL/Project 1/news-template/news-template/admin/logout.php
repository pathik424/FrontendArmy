
<?php

//For Connection
$conn = mysqli_connect("localhost","root","","news_site") or die("Connection Failed");

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/index.php");


?>