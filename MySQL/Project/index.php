

<?php 
require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Student Details</title>
</head>
<body>
        
</body>
</html>

<table style="margin: 30px;" class="table table-dark" >
<?php

// 1st Connection apyu

$conn = mysqli_connect("localhost","root","","classes") or die("Connection Failed");

// 2nd View Mate Data Select Karyo

$sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";


$result = mysqli_query($conn,$sql) or die('query Unsuccesfull');

// a e check karse ke databse mathi ketli raw mali  

if (mysqli_num_rows($result) > 0) {
?>

  <thead class="thead-light" >
    <tr>
    <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Address</th>
      <th scope="col">Student CLass</th>
      <th scope="col">Student Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <!-- Array Run thase ane jetlo data hase e badho automatic run thai jase  -->
        <?php
       while($row = mysqli_fetch_assoc($result)){
        ?>
    <tr>
    
      <td><?php echo $row['sid'] ?></td>
      <td><?php echo $row['sname'] ?></td>
      <td><?php echo $row['saddres'] ?></td>
      <td><?php echo $row['cname'] ?></td>
      <td><?php echo $row['sphone'] ?></td>


      <td>
        <a href="edit.php?id=<?php echo $row['sid'] ?>">Edit</a>
        <a href="delete.php?id=<?php echo $row['sid']?>">Delete</a>
        </td>
    </tr>
    <?php } ?>    
  </tbody>
  <?php  ?>
</table>

<?php

       }
else
{
?>
                <tr>
                    <td colspan="5">No Data Available</td>
                </tr>
<?php
}
?>
