<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "pelementsservices";

$mainHomeTitle = $_GET['mainHomeTitle'];
$headImage = $_GET['headImage'];
$headLittle = $_GET['headLittle'];
$listElOne = $_GET['listElOne'];
$listElTwo = $_GET['listElTwo'];
$listElThree = $_GET['listElThree'];
$listElFour = $_GET['listElFour'];
$listElFive = $_GET['listElFive'];
$contentTitle = $_GET['contentTitle'];
$contentBody = $_GET['contentBody'];
$serviceOne = $_GET['serviceOne'];
$service1Desc = $_GET['service1Desc'];
$serviceTwo = $_GET['serviceTwo'];
$service2Desc = $_GET['service2Desc'];
$serviceThree = $_GET['serviceThree'];
$service3Desc = $_GET['service3Desc'];
$serviceFour = $_GET['serviceFour'];
$service4Desc = $_GET['service4Desc'];
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
    $sqlquery.= "UPDATE $table set elementvalue = '$contentTitle' where elementid = 9; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$contentBody' where elementid = 10; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$serviceOne' where elementid = 11; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$service1Desc' where elementid = 12; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$serviceTwo' where elementid = 13; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$service2Desc' where elementid = 14; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$serviceThree' where elementid = 15; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$service3Desc' where elementid = 16; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$serviceFour' where elementid = 17; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$service4Desc' where elementid = 18; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$footer' where elementid = 19; ";
    $sqlquery.= "UPDATE $table set elementvalue = '$rights' where elementid = 20; ";

    

        mysqli_query("SET NAMES 'utf8'");
        $result = mysqli_query($connection, $sqlquery);

        if ($connection->multi_query($sqlquery)){
                header("Location: http://127.0.0.1/Proyecto-219.2-PII/admin/servicesad.php");
                //echo $sqlquery;
        }else{
            echo "Error updating section 1";
        }

} else{
    echo "Connection error";
}

?>