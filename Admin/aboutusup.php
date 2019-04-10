<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "pelementsaboutus";

$mainHomeTitle = $_GET['mainHomeTitle'];
$headImage = $_GET['headImage'];
$headLittle = $_GET['headLittle'];
$listElOne = $_GET['listElOne'];
$listElTwo = $_GET['listElTwo'];
$listElThree = $_GET['listElThree'];
$listElFour = $_GET['listElFour'];
$listElFive = $_GET['listElFive'];
$whoAreWe = $_GET['whoAreWe'];
$contentText = $_GET['contentText'];
$bodyImage = $_GET['bodyImage'];
$footer = $_GET['footer'];
$rights = $_GET['rights'];



$connection = mysqli_connect($hostname, $username, $password,$database);

if ($connection  == true){

    $sqlquery = "UPDATE $table set elementvalue = '$mainHomeTitle' where elementid = 1; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$headImage' where elementid = 2; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$headLittle' where elementid = 3; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElOne' where elementid = 4; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElTwo' where elementid = 5; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElThree' where elementid = 6; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElFour' where elementid = 7; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElFive' where elementid = 8; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$whoAreWe' where elementid = 9; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$contentText' where elementid = 10; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$bodyImage' where elementid = 11; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$footer' where elementid = 12; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$rights' where elementid = 13; ";
    

        mysqli_query("SET NAMES 'utf8'");
        $result = mysqli_query($connection, $sqlquery);

        if ($connection->multi_query($sqlquery)){
                header("Location: http://127.0.0.1/Proyecto-219.2-PII/admin/aboutusad.php");
                //echo $sqlquery;
        }else{
            echo "Error updating section 1";
        }

} else{
    echo "Connection error";
}

?>