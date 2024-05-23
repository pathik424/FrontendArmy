<?php include "header.php";

/// jo login user karse to jo e normal user hase to ene direct post.php ma  lai jase ane users nu access nai male

if($_SESSION['role'] == 0){
    header("Location: $hostname/post.php");
  }


  
if (isset($_POST['update'])) {

    $conn = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");

    $userid = mysqli_real_escape_string($conn, $_POST['user_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);


    // $sql = "SELECT username FROM user WHERE username = $user";
    // echo $sql;

    $sql1 = "UPDATE user SET first_name='$fname',last_name='$lname',username='$user',password='$password',role='$role' WHERE user_id = $userid";
    // echo $sql1;
    // exit;
    
    $result = mysqli_query($conn, $sql1) or die("Query Failed");


    header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/users.php");

    mysqli_close($conn);
}



?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <?php

                $conne = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");
                $user_id = $_GET['id'];
                $sql = "SELECT * FROM user WHERE user_id = $user_id";
                $result = mysqli_query($conne, $sql) or die('query Unsuccesfull');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {


                        // header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/users.php");

                        mysqli_close($conne);
                ?>
                        <!-- Form Start -->
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['user_id'] ?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'] ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" name="role" value="<?php echo $row['role']; ?>">


                                    <?php
                                    if ($row['role'] == 0) {
                                        # code...
                                        echo   '<option value="0"selected >Normal User</option>
                                                <option value="1">Admin</option>';
                                    } else {
                                        echo   '<option value="0"selected >Normal User</option>
                                                <option value="1" selected >Admin</option>';
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>" placeholder="" required>
                            </div>
                            <input type="submit" name="update" class="btn btn-primary" value="Update" required />
                        </form>
                <?php }
                } ?>
                <!-- /Form -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>