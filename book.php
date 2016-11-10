<?php
require('dbconnect.php');

if($_POST["book"]=="book"){
    echo "We have come from the booking club";
    
    $name=$_POST["NameBox"];
    $date=$_POST["DateBox"];
    $time=$_POST["TimeBox"];

    $sql="INSERT INTO bookings (name,date,time) VALUES ('$name', '$date', '$time')";
    
    if(mysqli_query($conn,$sql)){
        echo "Thanks for the booking.";
    }
    else {
        echo "Error ".$sql." ".mysql_error($conn);
    }
    
}

function display_all(){

    require ("dbconnect.php");
    $myquery="SELECT * FROM bookings";
    $result=mysqli_query($conn,$myquery);

    if($result){
    }
    else {
        echo "Error ".$sql." ".mysql_error($conn);
    }

    if($result->num_rows>0){
        //while there is a row
        while($row=$result->fetch_assoc()){
            echo "Name: ".$row["name"]." Date: ".$row["date"]." Time: ".$row["time"]."</br>";
        }
    }
    
}//eof display_all

display_all();

?>