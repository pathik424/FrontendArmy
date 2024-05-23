<?php include "header.php"; 

/// jo login user karse to jo e normal user hase to ene direct post.php ma  lai jase ane users nu access nai male

if($_SESSION['role'] == 0){
    header("Location: $hostname/post.php");
  }

  if (isset($_POST['save'])) {

    $conn = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");

    $cat = mysqli_real_escape_string($conn, $_POST['cat']);



    // $sql = "SELECT username FROM user WHERE username = $user";
    // echo $sql;
    
    $sql1 = "INSERT INTO category (category_name)
          VALUES ('{$cat}')";
    //   echo $sql1;
    //   exit;
    $result = mysqli_query($conn, $sql1) or die("Query Failed");
   
    
    header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/category.php");

    mysqli_close($conn);
}
  ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
