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
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Book Store</title>
        <link rel="stylesheet" href="Css/mystyle.css">

    </head>
    <body class = "Principal">

        
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
            <br>
            <button type="button" onclick="displayDate()">Display Date</button>
            <p id="demo2"></p> 
            <section>
                <h2 ondblclick="myFunction1()"><?php echo $sectionOne['elementvalue']; ?></h2>
                <p id="demo"></p> 
                <p><?php echo $contentOne['elementvalue']; ?></p>       
             </section>
             <section>
                 <h2><?php echo $sectionTwo['elementvalue']; ?></h2>
                 <p><?php echo $contentTwo['elementvalue']; ?></p>
             </section>
             <aside id="cuerpo">
                 <h2><?php echo $sideSection['elementvalue']; ?></h2>
                 <center>
                        <img id="central" src="<?php echo $imageBody['elementvalue']; ?>" alt="Libritos"></a>
                 </center>
                
                 <p id = "parrafo"><?php echo $sideContent['elementvalue']; ?></p>

             </aside>

        

    </body>
    <script>
    function myFunction1() {
  document.getElementById("demo").innerHTML = "Welcome to Home Client Page";
//   document.getElementById("demo3").innerHTML = "Hello World";
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