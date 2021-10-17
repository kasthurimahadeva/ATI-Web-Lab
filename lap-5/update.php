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
    <h1>update your record</h1>

    <div class="img">
        <img src="pic_2.jpg" alt="register">
    </div>
  
  <div class="container">
    <label for="ID"><b>ID</b></label><br>
    <input type="text" placeholder="Enter your updating ID" name="id" ><br>

    <label for="FirstName"><b>FirstName</b></label><br>
    <input type="text" placeholder="Enter New FirstName" name="fname" ><br>

    <label for="LastName"><b>LastName</b></label><br>
    <input type="text" placeholder="Enter New LastName" name="lname" ><br>
    
    <label for="E-mail"><b>E-mail</b></label><br>
    <input type="email" placeholder="Enter New E-mail" name="email" ><br>

    <label for="Address"><b>Address</b></label><br>
    <input type="text" placeholder="Enter New Address" name="address"><br>
     <div class="btn">
     <button type='submit' name='home' ><a href ='http://localhost/lapsheet-5/index.php' style="color:white">Go To Home Page</a></button>
     <button type="submit" name="btnUpdate">update</button>
     
     </div>   
     <?php
    include_once "function.php";
 if(isset($_POST['btnUpdate'])){

    $id=$_POST['id'];

    $FirstName=$_POST['fname'];

    $LastName=$_POST['lname'];

    $Email=$_POST['email'];

    $Address=$_POST['address'];
    
    $sql = "UPDATE user1 SET firstname = '$FirstName', lastname = '$LastName', email='$Email',useraddress = '$Address' WHERE id  = ' $id ' ";

    if(createDataBase()->query($sql)){

        echo "<p style = color:green;>Update success full !</p>";

    }else{

        echo "update fail<br>";
    }
    

  }
     ?>
</form>
</div>

</body>
</html>