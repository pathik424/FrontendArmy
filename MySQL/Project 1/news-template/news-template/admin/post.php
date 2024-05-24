<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <?php

              $conn = mysqli_connect("localhost","root","","news_site") or die("Connection Failed");
              

              $limit =4;
              if(isset($_GET['page']))
              {
                $page = $_GET['page'];
                
              }
              else
              {
                $page = 1;
      
              }
              $offset = ($page - 1) * $limit;

              //Pagination
            //   $limit =3;
            //   $page = $_GET['page'];
            //   $offset = ($page - 1) * $limit;

              $sql = "SELECT * FROM post 
              LEFT JOIN category on post.category = category.category_id
              LEFT JOIN user on post.author = user.user_id
              ORDER BY post.post_id ASC LIMIT {$offset},{$limit}";

            //   echo $sql;
            //   exit;
           
     



              $result = mysqli_query($conn,$sql) or die('query Unsuccesfull');

              if (mysqli_num_rows($result) > 0) {
               ?>

              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <!-- <th>Image</th> -->
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>


                      <?php
                       while($row = mysqli_fetch_assoc($result)){
                        ?>

                          <tr>
                              <td class='id'><?php echo $row['post_id'] ?></td>
                              <td><?php echo $row['title'] ?></td>
                              <td><?php echo $row['category_name'] ?></td>
                              <td><?php echo $row['post_date'] ?></td>
                              <td><?php echo $row['username'] ?></td>
                              <!-- <td><img src=" echo $row['post_img'] " alt="No picture for product" height="70" width="70px"></td> -->
                              <td class='edit'><a href='update-post.php?id=<?php echo $row['post_id'] ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?id=<?php echo $row['post_id'] ?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php
                          ?>
              <?php }}
// include "footer.php"; }}?>

                      </tbody>
                  </table>
                </div>
                <?php
             $sql2 = "SELECT * FROM user";

             $result1 = mysqli_query($conn, $sql2) or die("Query Failed");

             if (mysqli_num_rows($result1) > 0) {

               $total_records = mysqli_num_rows($result1);
              
               $total_page = ceil($total_records / $limit);



               echo '<ul class= "pagination admin-pagination">';


               // Jetlo Data Hase etlo etla page reload thata rehse For Loop Ma
               
               if($page > 1){
                 
                 echo '<li><a href="post.php?page='.($page - 1).'">Prev</a></li>';
               }


               for ($i = 1; $i <= $total_page; $i++) {
                 
                 // Jena Par Click Karso Ena Par Dekhase 
                 if($i == $page){
                   
                   $active = "active";
                   
                 }
                 else{
                   
                   $active = "";
                 }  
                 
                 
                 echo '<li class="'.$active.' "><a href="post.php?page=' . $i . '">' . $i . '</a></li>';
                 
               }
               if($total_page > $page){

                 echo '<li><a href="post.php?page='.($page + 1).'">Next</a></li>';
               
               }
               echo  '</ul>';
             }

     ?>
                  <!-- <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul> -->
              </div>
              </div>
              </div>
              

