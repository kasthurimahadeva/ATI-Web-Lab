<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGESTATION</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 15%;
  }
  button:hover{
      opacity: 0.5;
  }

</style>
<body style="background: linear-gradient(to bottom, rgba(126, 104, 88, 0.8) 0%, rgba(116, 96, 82, 0.8) 100%),
    url('pic_3.jpg');
    position: center;
    background-size: cover;">

<form action="" method="post">
    <h1>View</h1>

    <div class="img">
        <img src="pic_1.jpg" alt="register">
    </div>
  
  <div class="container">
    <label for="id"><b>ID</b></label><br>
    <input type="text" placeholder="Enter Your ID" name="id" ><br>
    

    <label for="FirstName"><b>FirstName</b></label><br>
    <input type="text" placeholder="Enter FirstName" name="fname" ><br>

    <label for="LastName"><b>LastName</b></label><br>
    <input type="text" placeholder="Enter LastName" name="lname" ><br>
    
    <label for="E-mail"><b>E-mail</b></label><br>
    <input type="email" placeholder="Enter E-mail" name="email" ><br>

    <label for="Address"><b>Address</b></label><br>
    <input type="text" placeholder="Enter Address" name="address"><br>
     
     <button type="submit" name="btnView">View</button>
     <button type="submit" name="btnUpdate">update</button>
     <button type="submit" name="btnDelete">delete</button>
  <?php
  include_once "function.php";

    // $ID=$_POST['view'];

  if(isset($_POST['btnView'])){

    getAllUserData();

  }
   
  if(isset($_POST['btnUpdate'])){

    $id=$_POST['id'];

    $FirstName=$_POST['fname'];

    $LastName=$_POST['lname'];

    $Email=$_POST['email'];

    $Address=$_POST['address'];
    
    $sql = "UPDATE user1 SET firstname = '$FirstName', lastname = '$LastName', email='$Email',useraddress = '$Address' WHERE id  =  $id ";

    if(createDataBase()->query($sql)){

        echo "update sucess<br>";

    }else{

        echo "update fail<br>";
    }
    

  }

  if(isset($_POST['btnDelete'])){
    $id=$_POST['id'];

    $sql="DELETE  FROM user1 WHERE id = $id";

    if(createDataBase()->query($sql)){

      echo "delete successfull<br>";

    }else{

        echo "delete fail<br>";
    }
  }

  ?>
     </div>

</form>

 
 </div>
</body>
</html>   