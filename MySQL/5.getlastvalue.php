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
    VALUES('Nirav','Patel','nirav424@gmail.com',9405574866)";

    if($conn->query($sql) == true){
        $last_id = $conn->insert_id;  // New id Show Karva Mate a add karvu
        echo "New Record Created Successfully. Last Insert ID is:" .$last_id;

    }
    else
    {
        echo "error creating new Values: ". $conn->error;

    }

    $conn->close();




?>