<?php include "header.php"; ?>

<?php
if (isset($_POST['update'])) {

$conn = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");


// if($_FILES['image']['error'] == UPLOAD_ERR_OK)
                         
// {  
//  $image = "upload/post/".time().$_FILES['image']["name"];
//  move_uploaded_file($_FILES['image']['tmp_name'],$image);
// } 
// else
//  {
//      $image = $_REQUEST["old_profile_pic"];
//  }


$postid = mysqli_real_escape_string($conn, $_POST['post_id']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$desc = mysqli_real_escape_string($conn, $_POST['description']);
$cat = mysqli_real_escape_string($conn, $_POST['category']);



// $sql = "SELECT username FROM user WHERE username = $user";
// echo $sql;

$sql1 = "UPDATE post SET title='$title',description='$desc', category='$cat'  WHERE post_id = $postid";
// echo $sql1;
// exit;

$result = mysqli_query($conn, $sql1) or die("Query Failed");


header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/post.php");

mysqli_close($conn);
}

?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        <?php
        // include "config.php";

        $conn = mysqli_connect("localhost","root","","news_site") or die("Connection Failed");

        $post_id = $_GET['id'];
        // echo $post_id;
        $sql = "SELECT post.post_id,post.title, post.description, post.post_img, 
                category.category_name,post.category FROM post 
                LEFT JOIN category ON post.category = category.category_id
                LEFT JOIN user ON post.author = user.user_id
                WHERE post.post_id = {$post_id}";
        $result = mysqli_query($conn, $sql) or die('query Unsuccesfull');
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {


                // header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/users.php");

                mysqli_close($conn);

        ?>
        <!-- Form for show edit-->
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="<?php echo $row['post_id'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="title"  class="form-control" id="exampleInputUsername" value="<?php echo $row['title'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="description" class="form-control"   required rows="5">
                <?php echo $row['description'] ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category">
                    <?php
                    

                    $conn = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");

                    $sql1 = "SELECT * FROM category";

                    $result1 = mysqli_query($conn, $sql1) or die("Query Failed");

                    if (mysqli_num_rows($result1) > 0) {

                        while ($row1 = mysqli_fetch_assoc($result1)) {

                            if($row['category'] == $row1['category_id']){
                                $selected = "selected";
                            }
                            else
                            {
                                echo "<option {$selected} value='{$row1['category_id']}'>{$row1['category_name']}</option>";
                            }

                        }
                    }
                             
                    
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" name="image">
                <img  src="<?php echo $row['post_img'] ?>" height="150px">
                <input type="hidden" name="old-image" value="">
            </div>
            <input type="submit" name="update" class="btn btn-primary" value="Update" />
        </form>
        <!-- Form End -->
        <?php }
                } ?>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
