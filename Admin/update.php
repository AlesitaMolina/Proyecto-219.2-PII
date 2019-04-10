<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$userid = $_GET['id'];

?>

<section>
    <h3>Contact form</h3>
    <form action="http://localhost/Proyecto-219.2-PII/Admin/connectup.php" method="get">
        <input type="int" name = "userid" value = "<?php echo $userid; ?>" readonly>
        <input type="text" name="usernameup" placeholder="User name">
        <input type="email" name="useremail" placeholder="User email"></br>
       <br> <textarea name="usercommentsf" rows="10" cols="30">
            </textarea></br></br>

        <input type="submit" value="Enviar comentarios">



    </form>
</section>



</body>
</html>

