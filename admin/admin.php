<?php
session_start();

$conn = mysqli_connect('localhost', 'root');
if($conn){
  //echo "connection successful";
}else{
  echo "no conection";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
  </head>
  <body>

<form class="box" action="logincheck.php" method="post">
  <h1>Admin Login</h1>
  <input type="text" name="user" placeholder="Username">
  <input type="password" name="pass" placeholder="Password">
  <input type="submit" name="submit" value="Enter">
</form>


  </body>
</html>


