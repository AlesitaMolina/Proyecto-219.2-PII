<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>ID</th>
    <th>User Name</th>
    <th>User email</th>
    <th>Comments</th>
  </tr>
<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "univa";
    $table = "usercomments";



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
                    echo "</tr>";
                }
            }
            
    }else{
        echo "Sorry, something went wrong";
    }


?>
</table>

</body>
</html>