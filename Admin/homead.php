<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "pelementshome";


$connection = mysqli_connect($hostname, $username, $password,$database);

if ($connection  == true){

$query_seccion1 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=1 ");
$mainHomeTitle = mysqli_fetch_assoc($query_seccion1);

$query_seccion2 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=2 ");
$headImage = mysqli_fetch_assoc($query_seccion2);

$query_seccion3 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=3 ");
$headLittle = mysqli_fetch_assoc($query_seccion3);

$query_seccion4 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=4 ");
$sectionOne = mysqli_fetch_assoc($query_seccion4);

$query_seccion5 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=5 ");
$contentOne = mysqli_fetch_assoc($query_seccion5);

$query_seccion6 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=6 ");
$sectionTwo = mysqli_fetch_assoc($query_seccion6);

$query_seccion7 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=7 ");
$contentTwo = mysqli_fetch_assoc($query_seccion7);

$query_seccion8 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=8 ");
$sideSection = mysqli_fetch_assoc($query_seccion8);

$query_seccion9= mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=9 ");
$imageBody = mysqli_fetch_assoc($query_seccion9);

$query_seccion10 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=10 ");
$sideContent = mysqli_fetch_assoc($query_seccion10);

$query_seccion11 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=11 ");
$listElOne = mysqli_fetch_assoc($query_seccion11);

$query_seccion12 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=12 ");
$listElTwo = mysqli_fetch_assoc($query_seccion12);

$query_seccion13 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=13 ");
$listElThree = mysqli_fetch_assoc($query_seccion13);

$query_seccion14 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=14 ");
$listElFour = mysqli_fetch_assoc($query_seccion14);

$query_seccion15 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=15 ");
$listElFive = mysqli_fetch_assoc($query_seccion15);

$query_seccion16 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=16 ");
$footer = mysqli_fetch_assoc($query_seccion16);

$query_seccion17 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=17 ");
$rights = mysqli_fetch_assoc($query_seccion17);


} else{
    "Error conectando a la base de datos";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="CSS/mystyleforms.css" rel="stylesheet">
</head>

<body>
    

   <section id="admin">
        <h1> Change elements in home page </h1>
         <form action="homeup.php" method="GET" onreset="message()">
         <p id="demo"></p>
         <div class = "todoizq">
         <div class = "titles">
         <div class = "titlesleft">
            <p>Home Head Title</p>
            <p> Logo URL</p>
            <p> Credit Text</p>
            <p> Section One</p>
            <p> Content One</p>
            <p>Section Two</p>
            <p>Content Two</p>
            <p>Side Section</p>
            <p>Image Body</p>
            </div>
            <div class = "inputsleft">
            <input type="text" id="fname" name="mainHomeTitle" value ="<?php echo $mainHomeTitle['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" onchange="myFunction2()" required>
            
            <input type="text" name="headImage" value="<?php echo $headImage['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="headLittle" value="<?php echo $headLittle['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="sectionOne" value="<?php echo $sectionOne['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>  
            
            <input type="text" name="contentOne" value="<?php echo $contentOne['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="sectionTwo" value="<?php echo $sectionTwo['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="contentTwo" value="<?php echo $contentTwo['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="sideSection" value="<?php echo $sideSection['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>
            
            <input type="text" name="imageBody" value="<?php echo $imageBody['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            </div>
</div>
<div class = "enmedio">
</div>
<div class = "tododerecha">
<div class = "titlesright">
            <p>Side Content</p>
            <p>Navigation Element One</p>
            <p>Navigation Element Two</p>
            <p>Navigation Element Three</p>
            <p>Navigation Element Four</p>
            <p>Navigation Element Five</p>
            <p>Footer title</p>
            <p>Rights</p>
            </div>
<div class = "inputsright">
            <input type="text" name="sideContent" value="<?php echo $sideContent['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElOne" value="<?php echo $listElOne['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElTwo" value="<?php echo $listElTwo['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElThree" value = "<?php echo $listElThree['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElFour" value = "<?php echo $listElFour['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="listElFive" value = "<?php echo $listElFive['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required>
            
            <input type="text" name="footer" value = "<?php echo $footer['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            
            <input type="text" name="rights" value = "<?php echo $rights['elementvalue']; ?>" onselect="myFunction()" onfocus="myFunction1(this)" required> 
            </div>  
</div>          

            <input type="submit"> 
            <input type="submit" value="Back to Menu" formaction="http://127.0.0.1/Proyecto-219.2-PII/admin/mainmenu.php">
            <input type="reset">
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