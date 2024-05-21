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
        
    

    $sql = "CREATE TABLE MyGuest(
        id INT PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(30),
        lastname VARCHAR(30),
        email VARCHAR(30),
        mobile VARCHAR(30)
    )";

    if($conn->query($sql) == true){
        echo "Databse Created Successfully";

    }
    else
    {
        echo "error creating databse: ". $conn->error;

    }

    $conn->close();




?>