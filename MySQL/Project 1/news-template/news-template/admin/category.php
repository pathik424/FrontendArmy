<?php include "header.php"; 

if($_SESSION['role'] == 0){
    header("Location: $hostname/post.php");
  }

?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <?php

              $conn = mysqli_connect("localhost","root","","news_site") or die("Connection Failed");
              
              //Pagination
            //   $limit =3;
            //   $page = $_GET['page'];
            //   $offset = ($page - 1) * $limit;

              $sql = "SELECT * FROM category";



              $result = mysqli_query($conn,$sql) or die('query Unsuccesfull');

              if (mysqli_num_rows($result) > 0) {
               ?>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>

                    <?php
                       while($row = mysqli_fetch_assoc($result)){
                        ?>

                        <tr>
                            <td class='id'><?php echo $row['category_id'] ?></td>
                            <td><?php echo $row['category_name'] ?></td>
                            <td><?php echo $row['post'] ?></td>
                            <td class='edit'><a href='update-category.php?id=<?php echo $row['category_id'] ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php?id=<?php echo $row['category_id'] ?>'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        
                        <?php }?>

                    </tbody>
                </table>
                <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php include "footer.php"; ?>
