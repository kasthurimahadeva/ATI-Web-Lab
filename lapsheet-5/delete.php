<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGESTATION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
    <h1>Delete your record</h1>

  
  
  <div class="container">
    <label for="ID"><b>ID</b></label><br>
    <input type="text" placeholder="Enter your updating ID" name="id" ><br>
    <button type='submit' name='home' ><a href ='http://localhost/lapsheet-5/index.php' style="color:white">Go To Home Page</a></button>
    <button type="submit" name="btnDelete" style="background-color:#8B0000">Delate</button>
<div>
<?php
include_once "function.php";
if(isset($_POST['btnDelete'])){
    $id=$_POST['id'];

    $sql="DELETE  FROM user1 WHERE id = $id";

    if(createDataBase()->query($sql)){

      echo "<p>delete success full !</p>";

    }else{

        echo "delete fail<br>";
    }
  }
?>
</form>
</body>
</html>