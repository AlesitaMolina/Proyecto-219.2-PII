<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "pelementshome";

$mainHomeTitle = $_GET['mainHomeTitle'];
$headImage = $_GET['headImage'];
$headLittle = $_GET['headLittle'];
$sectionOne = $_GET['sectionOne'];
$contentOne = $_GET['contentOne'];
$sectionTwo = $_GET['sectionTwo'];
$contentTwo = $_GET['contentTwo'];
$sideSection = $_GET['sideSection'];
$imageBody = $_GET['imageBody'];
$sideContent = $_GET['sideContent'];
$listElOne = $_GET['listElOne'];
$listElTwo = $_GET['listElTwo'];
$listElThree = $_GET['listElThree'];
$listElFour = $_GET['listElFour'];
$listElFive = $_GET['listElFive'];
$footer = $_GET['footer'];
$rights = $_GET['rights'];



$connection = mysqli_connect($hostname, $username, $password,$database);

if ($connection  == true){

    $sqlquery = "UPDATE $table set elementvalue = '$mainHomeTitle' where elementid = 1; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$headImage' where elementid = 2; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$headLittle' where elementid = 3; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$sectionOne' where elementid = 4; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$contentOne' where elementid = 5; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$sectionTwo' where elementid = 6; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$contentTwo' where elementid = 7; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$sideSection' where elementid = 8; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$imageBody' where elementid = 9; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$sideContent' where elementid = 10; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElOne' where elementid = 11; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElTwo' where elementid = 12; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElThree' where elementid = 13; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElFour' where elementid = 14; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$listElFive' where elementid = 15; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$footer' where elementid = 16; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$rights' where elementid = 17; ";

        mysqli_query("SET NAMES 'utf8'");
        $result = mysqli_query($connection, $sqlquery);

        if ($connection->multi_query($sqlquery)){
                header("Location:http://localhost/Proyecto-219.2-PII/admin/homead.php");
                //echo $sqlquery;
        }else{
            echo "Error updating section 1";
        }

} else{
    echo "Connection error";
}

?>