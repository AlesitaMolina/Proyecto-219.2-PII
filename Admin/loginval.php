<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    $table = "login";

    $loginuname = $_GET['uname'];
    $loginpsw = $_GET['psw'];

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if($connection == true){
     //   echo "Great you are connected";   
            $sqlquery = "SELECT `UserName`,`Psw` FROM `login` WHERE UserName = '$loginuname' and Psw = '$loginpsw'";

            $result = mysqli_query($connection,$sqlquery);

            if(mysqli_num_rows($result)>0){
                header("Location: http://localhost/Proyecto-219.2-PII/Admin/mainmenu.php");
            }else{

                header("Location: http://localhost/Proyecto-219.2-PII/Admin/login.php");
            }



    }else{
        echo "Sorry, something went wrong";
    }



?>