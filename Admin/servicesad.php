<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "pelementsservices";


$connection = mysqli_connect($hostname, $username, $password,$database);

if ($connection  == true){

    $query_seccion1 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=1 ");
    $mainHomeTitle = mysqli_fetch_assoc($query_seccion1);
    
    $query_seccion2 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=2 ");
    $headImage = mysqli_fetch_assoc($query_seccion2);
    
    $query_seccion3 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=3 ");
    $headLittle = mysqli_fetch_assoc($query_seccion3);
    
    $query_seccion4 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=4 ");
    $listElOne = mysqli_fetch_assoc($query_seccion4);
    
    $query_seccion5 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=5 ");
    $listElTwo = mysqli_fetch_assoc($query_seccion5);
    
    $query_seccion6 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=6 ");
    $listElThree = mysqli_fetch_assoc($query_seccion6);
    
    $query_seccion7 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=7 ");
    $listElFour = mysqli_fetch_assoc($query_seccion7);
    
    $query_seccion8 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=8 ");
    $listElFive = mysqli_fetch_assoc($query_seccion8);
    
    $query_seccion9 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=9 ");
    $contentTitle = mysqli_fetch_assoc($query_seccion9);
    
    $query_seccion10 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=10 ");
    $contentBody = mysqli_fetch_assoc($query_seccion10);
    
    $query_seccion11 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=11 ");
    $serviceOne = mysqli_fetch_assoc($query_seccion11);
    
    $query_seccion12 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=12 ");
    $service1Desc = mysqli_fetch_assoc($query_seccion12);
    
    $query_seccion13 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=13 ");
    $serviceTwo = mysqli_fetch_assoc($query_seccion13);
    
    $query_seccion14 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=14 ");
    $service2Desc = mysqli_fetch_assoc($query_seccion14);
    
    $query_seccion15 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=15 ");
    $serviceThree = mysqli_fetch_assoc($query_seccion15);
    
    $query_seccion16 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=16 ");
    $service3Desc = mysqli_fetch_assoc($query_seccion16);
    
    $query_seccion17 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=17 ");
    $serviceFour = mysqli_fetch_assoc($query_seccion17);
    
    $query_seccion18 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=18 ");
    $service4Desc = mysqli_fetch_assoc($query_seccion18);
    
    $query_seccion19 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=19 ");
    $footer = mysqli_fetch_assoc($query_seccion19);
    
    $query_seccion20 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=20 ");
    $rights = mysqli_fetch_assoc($query_seccion20);

} else{
    "Error conectando a la base de datos";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Services</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="CSS/mystyleforms.css" rel="stylesheet">
</head>

<body>
    

   <section id="admin">
        <h1> Change elements in services page </h1>
         <form action="servicesup.php" method="GET" onreset="message()">
         <p id="demo"></p>
         <div class = "todoizq">
         <div class = "titles">
         <div class = "titlesleft">
            <p>Home Head Title</p>
            <p> Logo URL</p>
            <p> Credit Text</p>
            <p> Navigation element One</p>
            <p> Navigation element Two</p>
            <p> Navigation element Three</p>
            <p> Navigation element Four</p>
            <p> Navigation element Five</p>
            <p> Content Title</p>
            <p> Content Text</p>
            </div>
            <div class = "inputsleft">
            <input type="text" id="fname" name="mainHomeTitle" value ="<?php echo $mainHomeTitle['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" onchange="myFunction2()"required>
            
            <input type="text" name="headImage" value ="<?php echo $headImage['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="headLittle" value ="<?php echo $headLittle['elementvalue']; ?>" onselect="myFunction()"onfocus="myFunction1(this)" required>  
            
            <input type="text" name="listElOne" value ="<?php echo $listElOne['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElTwo" value ="<?php echo $listElTwo['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElThree" value ="<?php echo $listElThree['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElFour" value ="<?php echo $listElFour['elementvalue']; ?>"onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElFive" value ="<?php echo $listElFive['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="contentTitle" value ="<?php echo $contentTitle['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
           
            <input type="text" name="contentBody" value ="<?php echo $contentBody['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
</div>
</div>
<div class = "enmedio">
</div>
<div class = "tododerecha">
<div class = "titlesright">
            <p> Service Image One</p>
            <p> Service Description</p>
            <p> Service Image Two</p>
            <p> Service Description</p>
            <p> Service Image Three</p>
            <p> Service Description</p>
            <p> Service Image Four</p>
            <p> Service Description</p>
            <p> Footer Title</p>
            <p> Rights</p>
</div>
<div class = "inputsright">
        <input type="text" name="serviceOne" value ="<?php echo $serviceOne['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>   
            
            <input type="text" name="service1Desc" value ="<?php echo $service1Desc['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="serviceTwo" value ="<?php echo $serviceTwo['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>   
            
            <input type="text" name="service2Desc" value ="<?php echo $service2Desc['elementvalue']; ?>" onselect="myFunction()"onfocus="myFunction1(this)"  required>   
            
            <input type="text" name="serviceThree" value ="<?php echo $serviceThree['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>  
            
            <input type="text" name="service3Desc" value ="<?php echo $service3Desc['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>  
            
            <input type="text" name="serviceFour" value ="<?php echo $serviceFour['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>  
            
            <input type="text" name="service4Desc" value ="<?php echo $service4Desc['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>   
            
            <input type="text" name="footer" value ="<?php echo $footer['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>  
            
            <input type="text" name="rights" value ="<?php echo $rights['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
</div>  
</div>          

<!-- <div id = "inputs">
 

</div> -->
<div id = "button" >
            <input id = "button" type="submit"> <br><br>
            <input type="submit" value="Back to Menu" formaction="http://127.0.0.1/Proyecto-219.2-PII/admin/mainmenu.php">
            <input id = "button" type="reset">
</div>


        </form>

    </section>

    <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Add new text as needed";
}
function myFunction1(x) {
  x.style.background = "#E6E0FF";
}
function myFunction2() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
function message() {
  alert("The text will be restored as original");
}
    </script>

    

</body>
</html>