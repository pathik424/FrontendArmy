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
    VALUES('Pathik','Patel','p4pathik424@gmail.com',7405574866)";

    if($conn->query($sql) == true){
        echo "New Record Created Successfully";

    }
    else
    {
        echo "error creating databse: ". $conn->error;

    }

    $conn->close();




?>