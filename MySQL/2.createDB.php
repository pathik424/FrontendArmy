<?php



        $servername = "localhost";
        $username = "root";
        $password = "";
        // $database = "test";
        
        
        $conn = new mysqli($servername,$username,$password);
        
        
        if($conn->connect_error)
        {
            die("Connection Failed: ".$conn->connect_error);
        }
        
    

    $sql = "CREATE DATABASE test";

    if($conn->query($sql) == true){
        echo "Databse Created Successfully";

    }
    else
    {
        echo "error creating databse: ". $conn->error;

    }

    $conn->close();




?>