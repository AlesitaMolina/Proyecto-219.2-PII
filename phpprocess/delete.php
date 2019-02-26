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
    $usernamedel = $_GET['usernamedel'];

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if($connection == true){
     //   echo "Great you are connected";
            $sqlquery = "DELETE FROM $table WHERE username = '$usernamedel'" ;
            if(mysqli_query($connection,$sqlquery)){
                echo "Data deleted correctly";
            }else{
                echo "Error in removal";
            }
            
    }else{
        echo "Sorry, something went wrong";
    }


?>