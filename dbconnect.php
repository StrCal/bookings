<?php

    $servername="localhost";
    $username="strc";
    $password="";
    $dbname="c9";
    
    // This creates a connection to the server
    $conn=new mysqli($servername, $username, $password, $dbname);
    
    // This checks the connection and returns an error message if appropriate
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }

?>