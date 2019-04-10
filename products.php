<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "pelementsproducts";


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
$productOne = mysqli_fetch_assoc($query_seccion11);

$query_seccion12 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=12 ");
$product1Desc = mysqli_fetch_assoc($query_seccion12);

$query_seccion13 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=13 ");
$productTwo = mysqli_fetch_assoc($query_seccion13);

$query_seccion14 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=14 ");
$product2Desc = mysqli_fetch_assoc($query_seccion14);

$query_seccion15 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=15 ");
$productThree = mysqli_fetch_assoc($query_seccion15);

$query_seccion16 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=16 ");
$product3Desc = mysqli_fetch_assoc($query_seccion16);

$query_seccion17 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=17 ");
$productFour = mysqli_fetch_assoc($query_seccion17);

$query_seccion18 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=18 ");
$product4Desc = mysqli_fetch_assoc($query_seccion18);

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
    <div>
    <br> <button type="button" onclick="displayDate()">Display Date</button>
                    <p id="demo2"></p>  
            <h2 ondblclick="myFunction1()"><?php echo $contentTitle['elementvalue']; ?></h2>  
            <p id="demo"></p>  
            <p> <?php echo $contentBody['elementvalue']; ?></p>
        </div>
    <div class="gallery">
            <a target="_blank" href="<?php echo $productOne['elementvalue']; ?>">
              <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo $productOne['elementvalue']; ?>" alt="Libro" width="600" height="400">
            </a>
            <div class="desc"><?php echo $product1Desc['elementvalue']; ?></div>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="<?php echo $productTwo['elementvalue']; ?>">
              <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo $productTwo['elementvalue']; ?>" alt="ebook" width="600" height="400">
            </a>
            <div class="desc"><?php echo $product2Desc['elementvalue']; ?></div>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="<?php echo $productThree['elementvalue']; ?>">
              <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo $productThree['elementvalue']; ?>" alt="coffee" width="600" height="400">
            </a>
            <div class="desc"><?php echo $product3Desc['elementvalue']; ?></div>
          </div>
          
          <div class="gallery">
            <a target="_blank" href="<?php echo $productFour['elementvalue']; ?>">
              <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo $productFour['elementvalue']; ?>" alt="accesories" width="600" height="400">
            </a>
            <div class="desc"><?php echo $product4Desc['elementvalue']; ?></div>
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
  document.getElementById("demo").innerHTML = "Welcome to Products Client Page";
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