<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}
body{
  background-color: #FFFEE6;
  color: #6A92EB;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

td, th {
  border: 1px solid #9BB4E8;
  text-align: center;
  padding: 8px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  
}
h2{
  text-align: center;
  color: #4192EB;
}

tr:nth-child(even) {
  background-color: #D5EBFF;
}
tr:nth-child(odd) {
  background-color: #F2E0FF;
}
input[type=submit]{
    background-color: rgb(216, 170, 235);
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 15%;

  }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Info</title>


</head>

<body>

<h2>Base de Datos Usuarios</h2>

<table>
  <tr>
    <th>ID</th>
    <th>User Name</th>
    <th>User email</th>
    <th>Comments</th>
    <th>Actions Edit</th>  
    <th>Actions Delete</th>
  </tr>
<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    $table = "usercomments";
    $id = "id";

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if($connection == true){
     //   echo "Great you are connected";
            $sqlquery = "SELECT * FROM $table";
            $results = mysqli_query($connection, $sqlquery);

            if(mysqli_num_rows($results)>0){
                while($row = mysqli_fetch_assoc($results)){
                    echo "<tr>";

                      echo "<td>", $row['id']."</td>";  
                      echo "<td>", $row['username']."</td>";  
                      echo "<td>", $row['useremail']."</td>";  
                      echo "<td>", $row['usercomments']."</td>"; 
                      echo "<td><a href='update.php?id=" . $row['id']."' >Edit</a></td>";
                      echo "<td><a href='delete.php?id=" . $row['id']."' >Delete</a></td>";

       
                    echo "</tr>";
                }
            }
            
    }else{
        echo "Sorry, something went wrong";
    }


?>
</table>
<form>
<input type="submit" value="Back to Menu" formaction="http://127.0.0.1/Proyecto-219.2-PII/admin/mainmenu.php">
</form>

</body>
</html>