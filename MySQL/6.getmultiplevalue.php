<?php



        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "test";
        
        
        $conn = new mysqli($servername,$username,$password,$database);
        
        
        if($conn->connect_error)
        {
            die("Connection Failed: ".$conn->connect_error);
        }
        
    

    $sql = "INSERT INTO MyGuest(firstname,lastname,email,mobile)
    VALUES('Yash','Patel','yp424@gmail.com',8405574866)";
    $sql .= "INSERT INTO MyGuest(firstname,lastname,email,mobile)
    VALUES('Nil','Patel','np424@gmail.com',5405574866)";
    $sql .= "INSERT INTO MyGuest(firstname,lastname,email,mobile)
    VALUES('Vikesh','Patel','vk@gmail.com',6405574866)";
    $sql .= "INSERT INTO MyGuest(firstname,lastname,email,mobile)
    VALUES('Vidhi','Patel','vidhi424@gmail.com',4405574866)";

    if($conn->multi_query($sql) == true){
      
        echo "New Record Created Successfully.";

    }
    else
    {
        echo "error creating new Values: ". $conn->error;

    }

    $conn->close();




?>