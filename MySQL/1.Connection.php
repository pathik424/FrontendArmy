<?php

class Connection{
    public function __construct(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "test";
        
        
        $conn = new mysqli($servername,$username,$password,$database);
        
        
        if($conn->connect_error)
        {
            die("Connection Failed: ".$conn->connect_error);
        }
        echo "Connect Successfully";
    }
}

$con = new Connection();
?>