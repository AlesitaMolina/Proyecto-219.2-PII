<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "usercomments";

    $useremail = $_GET['useremail'];
    $usercomments = $_GET['usercommentsf'];
    $usernameupdate = $_GET['usernameup'];
$userid = $_GET['userid'];

$connection = mysqli_connect($hostname, $username, $password, $database);

if($connection == true){
 //     echo "Great you are connected";

        $sqlquery = "UPDATE $table SET username = '$usernameupdate', useremail = '$useremail', usercomments = '$usercomments' WHERE id = '$userid'";
        if(mysqli_query($connection,$sqlquery)){
           header("Location: http://localhost/Proyecto-219.2-PII/Admin/read.php");
         echo $sqlquery;
        }else{
            echo "Error in update";
        }
        
}else{
    echo "Sorry, something went wrong";
}


?>