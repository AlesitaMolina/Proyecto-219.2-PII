<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";
$table = "pelementscontact";


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
$footer = mysqli_fetch_assoc($query_seccion9);

$query_seccion10 = mysqli_query($connection,"SELECT * FROM  $table WHERE elementid=10 ");
$rights = mysqli_fetch_assoc($query_seccion10);


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
<body class = "Principal" onresize="myFunction2()">
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
<section>
<p id="demo3"> </p>
<h3 ondblclick="myFunction1()">Contact form</h3>
<button class = "button" type="button" onclick="displayDate()">Display Date</button>
<p id="demo"></p>
<p id="demo2"></p>

    <form action="phpprocess/contact.php" method="get">
        <input type="text" name="username" placeholder="User name" id="fname" onblur="myFunction()"><br><br>
        <input type="email" name="useremail" placeholder="User email"><br><br>
        <textarea name="usercomments" rows="10" cols="30">
            </textarea><br><br>

        <input type="submit" value="Enviar comentarios">



    </form>
</section>



<script>
function myFunction() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
function myFunction1() {
  document.getElementById("demo").innerHTML = "Welcome to Contact Form";
}
function displayDate() {
  document.getElementById("demo2").innerHTML = Date();
}
function myFunction2() {
  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("demo3").innerHTML = txt;
}
</script>

</div>
    
</body>
<footer class="foot">
    <p><?php echo $footer['elementvalue']; ?></p>
    <P>&copy; <?php echo $rights['elementvalue']; ?></P>
</footer>
</html>