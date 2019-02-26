<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    $table = "usercomments";
    $usernameform = $_GET['username'];
    $useremail = $_GET['useremail'];
    $usercomments = $_GET['usercomments'];
    $usernameupdate = $_GET['usernameup'];

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if($connection == true){
     //   echo "Great you are connected";
            $sqlquery = "UPDATE $table SET username = '$usernameform', useremail = '$useremail', usercomments = '$usercomments' WHERE username = '$usernameupdate'";
            if(mysqli_query($connection,$sqlquery)){
                echo "Data updated correctly";
            }else{
                echo "Error in update";
            }
            
    }else{
        echo "Sorry, something went wrong";
    }


?>