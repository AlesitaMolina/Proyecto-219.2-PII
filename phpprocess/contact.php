<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    $table = "usercomments";

    $usernameform = $_GET['username'];
    $useremail = $_GET['useremail'];
    $usercomments = $_GET['usercomments'];

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if($connection == true){
     //   echo "Great you are connected";
            $sqlquery = "INSERT INTO $table (username, useremail, usercomments) 
            VALUES ('$usernameform','$useremail','$usercomments')";

            if(mysqli_query($connection,$sqlquery)){
                echo "Data inserted correctly";
            }else{
                echo "Error in insertion";
            }



    }else{
        echo "Sorry, something went wrong";
    }


?>