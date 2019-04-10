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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store Web Page</title>
    <link rel="stylesheet" href="Css/mystyle.css">
</head>
<body class = "Principal">
    <div>
        <header>
           
            
            <div class="headercontainer">
                    <div class = "ImageHead">                  
                            <img id="logoheader" src="<?php echo $headImage['elementvalue']; ?>" alt="logo">
                    </div>
                    <div class="TextHead">
                    <h2 id = "MainText"><?php echo $mainHomeTitle['elementvalue']; ?></h2>
                    <small  id="littleh"><?php echo $headLittle['elementvalue']; ?></small>
                    </div>
        </div>
                

            </header>
        <nav id="navbar">

            <ul class="list-sm">
                <li><a href="index.php"><?php echo $listElOne['elementvalue']; ?></a></li>
                <li><a href="Aboutus.php"><?php echo $listElTwo['elementvalue']; ?></a></li>
                <li><a href="Products.php"><?php echo $listElThree['elementvalue']; ?></a></li>
                <li><a href="Services.php"><?php echo $listElFour['elementvalue']; ?></a></li>
                <li><a href="Contact.php"><?php echo $listElFive['elementvalue']; ?></a></li>

            </ul>
        </nav>

    </div>
    <br> <button type="button" onclick="displayDate()">Display Date</button>
    <p id="demo2"></p> 
    <div class = "Everything">
        <h2 ondblclick="myFunction1()"><?php echo $contentTitle['elementvalue']; ?></h2>
        <p id="demo"></p> 
        <p class = "IntroText"> 
        <?php echo $contentBody['elementvalue']; ?></p>
    </div>
    <div class = "MainBody"> 
    <div class="gallery">
        <a target="_blank" href="<?php echo $serviceOne['elementvalue']; ?>">
          <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo $serviceOne['elementvalue']; ?>" alt="Coffee" width="600" height="400">
        </a>
        <div class="desc"><?php echo $service1Desc['elementvalue']; ?></div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="<?php echo $serviceTwo['elementvalue']; ?>">
          <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0"  src="<?php echo $serviceTwo['elementvalue']; ?>" alt="Online" width="600" height="400">
        </a>
        <div class="desc"><?php echo $service2Desc['elementvalue']; ?></div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="<?php echo $serviceThree['elementvalue']; ?>">
          <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0"  src="<?php echo $serviceThree['elementvalue']; ?>" alt="hallway" width="600" height="400">
        </a>
        <div class="desc"><?php echo $service3Desc['elementvalue']; ?></div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="<?php echo $serviceFour['elementvalue']; ?>">
          <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0"  src="<?php echo $serviceFour['elementvalue']; ?>" alt="Store" width="600" height="400">
        </a>
        <div class="desc">  <?php echo $service4Desc['elementvalue']; ?></div>
      </div>
      <div>
            <!-- <p class = "FinalText"> 
                    Et ex magna pariatur non sit ex occaecat proident amet ea officia exercitation enim. Culpa anim excepteur minim eiusmod minim deserunt officia ad incididunt nulla Lorem officia magna. Nisi nulla aliqua irure et sint culpa aute exercitation magna cupidatat proident eiusmod dolore nulla. Ut tempor occaecat eu eiusmod eiusmod est nulla reprehenderit ad excepteur Lorem sunt id proident. Veniam excepteur consectetur incididunt commodo. Excepteur nostrud reprehenderit occaecat excepteur nulla dolor nulla do labore anim esse ipsum qui.
        
        Irure commodo anim anim tempor proident tempor sit aliqua in aliqua ut esse duis fugiat. Consectetur anim est exercitation labore. Deserunt est qui enim velit esse tempor incididunt irure proident eu ea. Et in labore deserunt eiusmod commodo laborum velit dolor officia excepteur officia cupidatat aute pariatur.
                </p> -->
      </div>
    </div>
</body>
<script>
function bigImg(x) {
  x.style.height = "180px";
  x.style.width = "130%";
}

function normalImg(x) {
  x.style.height = "150px";
  x.style.width = "100%";
}
function myFunction1() {
  document.getElementById("demo").innerHTML = "Welcome to Services Page";
}
function displayDate() {
  document.getElementById("demo2").innerHTML = Date();
}
</script>

<footer class="foot">

    <p><?php echo $footer['elementvalue']; ?></p>
    <P>&copy; <?php echo $rights['elementvalue']; ?></P>
</footer>
</html>