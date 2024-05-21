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
  <title>Student Update Details</title>
</head>

<body>

</body>

</html>


<!--Code Pen-->



<main>
  <div class="form-container">
    <h1 class="title"><span>Student Update Details</span></h1>

    <?php

    $conn = mysqli_connect("localhost", "root", "", "classes") or die("Connection Failed");

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE sid = $stu_id";

    // echo $sql;
    // exit; 

    $result = mysqli_query($conn, $sql) or die('query Unsuccesfull');

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        //  echo $row;
        //  exit; 

    ?>
        <form autocomplete="off" action="updatedata.php" method="post">


          <label for="name">Student Name</label>
          <div class="row">
            <input type="text" name="sname" value="<?php echo $row['sname'] ?>" placeholder="Enter Student Name">
            <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>" placeholder="Enter Student Name">
          </div>
          <label for="name">Student Address</label>
          <div class="row">
            <input type="text" name="saddres" value="<?php echo $row['saddres'] ?>" placeholder="Enter Student addres">
          </div>

          <div>

            <label for="country">Employment Status:</label>

            <?php


            $sql1 = "SELECT * FROM studentclass";

            // echo $sql1;
            // exit; 

            $result1 = mysqli_query($conn, $sql1) or die('query Unsuccesfull');

            // echo $result1;
            // exit; 

            if (mysqli_num_rows($result1) > 0) {


              echo ' <select name="sclass">';


              while ($row1 = mysqli_fetch_assoc($result1)) {

                if ($row['sclass'] == $row1['cid']) {
                  # code...
                  $select = "selected";
                }
                else
                {
                   $select = "";
                }
                //  echo $row1;
                //  exit; 

                echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
              }

              echo "</select>";
            }

            ?>
          </div>
          <label for="name">Student Mobile No.</label>
          <div class="row">
            <input type="text" name="sphone" value="<?php echo $row['sphone'] ?>" placeholder="Enter Student Phone">
          </div>



          <button type="submit">Save</button>
        </form>
    <?php }
    } ?>
  </div>
</main>

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Poppins, Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
  }

  main {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  div.row {
    display: flex;
  }

  div.row input:nth-child(2) {
    margin-left: 5px;
  }

  div.form-container {
    align-items: left;
    max-width: 70%;
    border: 1px solid rgb(241, 245, 246);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 15px 30px;
    padding: 1%;
    margin-top: 5%;
  }

  input,
  select {
    width: 100%;
    padding: 1em;
    margin-bottom: 1em;
    padding: 12px 19px;
    border: 1px solid rgb(211, 221, 225);
    border-radius: 4px;
    background-color: rgb(255, 255, 255);
    color: rgb(69, 85, 96);
    transition: background-color 300ms ease-in-out 0s, color 300ms ease-in-out 0s;
  }

  button {
    width: 100%;
    color: rgb(255, 255, 255);
    background-color: rgb(1, 151, 236);
    height: 38px;
    padding: 0px 19px;
    border: 0;
    border-radius: 4px;
    line-height: 1;
    user-select: none;
    transition-duration: 200ms;
    transition-property: color, background-color;
    transition-timing-function: ease-in-out;
  }

  button:hover {
    cursor: pointer;
    background: #0354CE;
  }

  h1.title {
    text-align: center;
  }

  h1.title span {
    background-color: #fff;
    padding: 15px;
  }

  h1.title::after {
    display: block;
    content: "";
    border: 1px solid #ccc;
    margin-top: -0.5em;
    margin-bottom: 2em;
  }

  @media only screen and (max-width: 800px) {
    .row {
      flex-direction: column;
    }

    div.row input:nth-child(2) {
      margin-left: 0px;
    }
  }
</style>