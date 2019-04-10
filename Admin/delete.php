<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    $table = "usercomments";

    $userid = $_GET['id'];

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if($connection == true){
     //   echo "Great you are connected";
            $sqlquery = "DELETE FROM $table WHERE id = '$userid'";
            if(mysqli_query($connection,$sqlquery)){
                header("Location: http://localhost/Proyecto-219.2-PII/Admin/read.php");
            }else{
                echo "Error in removal";
            }
            
    }else{
        echo "Sorry, something went wrong";
    }


?>