<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    $table = "usercomments";



    $connection = mysqli_connect($hostname, $username, $password, $database);

    if($connection == true){
     //   echo "Great you are connected";
            $sqlquery = "SELECT * FROM $table";
            $results = mysqli_query($connection, $sqlquery);

            if(mysqli_num_rows($results)>0){
                while($row = mysqli_fetch_assoc($results)){
                      echo "id: ", $row['id']." - ".$row['username']."<br>";  
                }
            }
            
    }else{
        echo "Sorry, something went wrong";
    }


?>