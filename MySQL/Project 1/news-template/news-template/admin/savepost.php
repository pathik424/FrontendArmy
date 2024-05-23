<?php
// include "config.php";
$conn = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");


//image Handling

if(isset($_FILES['fileToUpload'])){
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    // $file_ext = strtolower(end(explode('.',$file_name['fileToUpload']['name'])));
    $file_ext = end(explode('.',$file_name)); // LINE 72
    $extentions = array("jpeg","jpg","png");

    if(in_array($file_ext,$extentions) == false)
    {
        $errors[] = "This Extenstions File not allowed , Please Choose JPEG,JPG,PNG";
    }
    if($file_size > 2097152) // How many bytes is a 2MB file? The correct answer is 2 * 1024 * 1024 Bytes. 
        {
        $errors[] = "File Size 2 mb or lower ";

    }
    if(empty($errors) == true)
    {
        move_uploaded_file($file_tmp,"upload/post".$file_name);
    }
    else{
        print_r($errors);
        die;
    }
    // $image = "upload/post/" . time() . $_FILES['image']["name"];
    // move_uploaded_file($_FILES['image']['tmp_name'], $image);
    
}


session_start();

$title = mysqli_real_escape_string($conn, $_POST['post_title']);
$desc = mysqli_real_escape_string($conn, $_POST['postdesc']);
$cat = mysqli_real_escape_string($conn, $_POST['category']);
$date = date("d M,Y");
$author = $_SESSION['user_id'];



$sql = "INSERT INTO post (title, description, category, post_date, author,post_img)
        VALUES ('{$title}','{$desc}','{$cat}','{$date}','{$author}','{$file_name}');";

$sql .= "UPDATE category SET post = post + 1 WHERE category_id = $cat";
// echo $sql;
// exit;



if(mysqli_multi_query($conn,$sql)){

    header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/post.php");
}
else{
    echo "Query Failed";
}


?>