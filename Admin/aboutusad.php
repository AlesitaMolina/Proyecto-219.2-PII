<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "pelementsaboutus";


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

$query_seccion9= mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=9 ");
$whoAreWe = mysqli_fetch_assoc($query_seccion9);

$query_seccion10 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=10 ");
$contentText = mysqli_fetch_assoc($query_seccion10);

$query_seccion11 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=11 ");
$bodyImage = mysqli_fetch_assoc($query_seccion11);

$query_seccion12 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=12 ");
$footer = mysqli_fetch_assoc($query_seccion12);

$query_seccion13 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=13 ");
$rights = mysqli_fetch_assoc($query_seccion13);


} else{
    "Error conectando a la base de datos";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin About Us</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="CSS/mystyleforms.css" rel="stylesheet">
</head>

<body>
    

   <section id="admin">
        <h1> Change elements in about us page </h1>
         <form action="aboutusup.php" method="GET" onreset="message()">
         <p id="demo"></p>
         <div class = "todoizq">
         <div class = "titles">
         <div class = "titlesleft">
            <p>Home Head Title</p>
            <p> Logo URL</p>
            <p class = "cred"> Credit Text</p>
            <p class = "one"> Navigation element One</p>
            <p class = "two"> Navigation element Two</p>
            <p class = "three"> Navigation element Three</p>
            <p class = "four"> Navigation element Four</p>
            </div>
            <div class = "inputsleft">
            <input type="text" name="mainHomeTitle" id="fname" value ="<?php echo $mainHomeTitle['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" onchange="myFunction2()" required>
            
            <input type="text" name="headImage" value ="<?php echo $headImage['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="headLittle" value ="<?php echo $headLittle['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="listElOne" value ="<?php echo $listElOne['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="listElTwo" value ="<?php echo $listElTwo['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="listElThree" value ="<?php echo $listElThree['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="listElFour" value ="<?php echo $listElFour['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            </div>
</div>
<div class = "enmedio">
</div>
<div class = "tododerecha">
<div class = "titlesright">
            <p> Navigation element Five</p>
            <p class = "five"> Content Title</p>
            <p class = "six"> Content Text</p>
            <p class = "seven"> Body Image</p>
            <p class = "eight"> Footer title</p>
            <p class = "nine"> Rights</p>
            </div>
<div class = "inputsright">
            <input type="text" name="listElFive" value ="<?php echo $listElFive['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="whoAreWe" value ="<?php echo $whoAreWe['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="contentText" value ="<?php echo $contentText['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="bodyImage" value ="<?php echo $bodyImage['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="footer" value ="<?php echo $footer['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            
            <input type="text" name="rights" value ="<?php echo $rights['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> <br><br> 
            </div>  
</div>   
<div class= "bot">
            <input type="submit"> <br><br>
            <input type="submit" value="Back to Menu" formaction="http://127.0.0.1/Proyecto-219.2-PII/admin/mainmenu.php">
            <input type="reset">
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