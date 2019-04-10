<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
<link rel="stylesheet" href="CSS/mystyleadmin.css">
</head>
<body>

<form action="loginval.php">
  <div class="imgcontainer">
    <img src="Images/adminlogin.png" alt="login" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <button type="submit">Login</button>

  </div>


</form>
</body>
</html>



