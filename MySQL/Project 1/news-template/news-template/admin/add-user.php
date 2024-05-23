<?php include "header.php";

/// jo login user karse to jo e normal user hase to ene direct post.php ma  lai jase ane users nu access nai male

if($_SESSION['role'] == 0){
    header("Location: $hostname/post.php");
  }

if (isset($_POST['save'])) {

    $conn = mysqli_connect("localhost", "root", "", "news_site") or die("Connection Failed");

    $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);


    // $sql = "SELECT username FROM user WHERE username = $user";
    // echo $sql;
    
    $sql1 = "INSERT INTO user (first_name, last_name, username, password, role)
          VALUES ('{$fname}','{$lname}','{$user}','{$password}','{$role}')";
    //   echo $sql1;
    //   exit;
    $result = mysqli_query($conn, $sql1) or die("Query Failed");
   
    
    header("Location: http://localhost/FrontendArmy/MySQL/Project%201/news-template/news-template/admin/users.php");

    mysqli_close($conn);
}
    


?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add User</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form Start -->
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" >
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" >
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" >
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" >
                    </div>
                    <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control" name="role">
                            <option value="0">Normal User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                </form>
                <!-- Form End-->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>