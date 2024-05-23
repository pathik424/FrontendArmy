<?php include "header.php"; 

/// jo login user karse to jo e normal user hase to ene direct post.php ma  lai jase ane users nu access nai male

if($_SESSION['role'] == 0){
    header("Location: $hostname/post.php");
  }
  ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
              <?php
        // include "config.php";

        $conn = mysqli_connect("localhost","root","","news_site") or die("Connection Failed");

        $cat_id = $_GET['id'];
        // echo $post_id;
        $sql = "SELECT * FROM category WHERE category_id = $cat_id";
        // echo $sql;
        // exit;
        $result = mysqli_query($conn, $sql) or die('query Unsuccesfull');
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {


                // header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/users.php");

                mysqli_close($conn);

        ?>
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="category_id"  class="form-control" value="1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="category_name" class="form-control" value="<?php echo $row['category_name'] ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="update" class="btn btn-primary" value="Update"  />
                  </form>
                </div>
              </div>
            </div>
          </div>

          <?php }
                } ?>
<?php include "footer.php"; ?>
