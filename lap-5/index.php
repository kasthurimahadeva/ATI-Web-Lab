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
    <h1>Registation</h1>

    <div class="img">
        <img src="pic_1.jpg" alt="register">
    </div>
  
  <div class="container">
    
      <!-- <label for="id"><b>ID</b></label><br>
    <input type="text" placeholder="Enter ID" name="id"><br> -->

    <label for="FirstName"><b>FirstName</b></label><br>
    <input type="text" placeholder="Enter FirstName" name="fname" ><br>

    <label for="LastName"><b>LastName</b></label><br>
    <input type="text" placeholder="Enter LastName" name="lname" ><br>
    
    <label for="E-mail"><b>E-mail</b></label><br>
    <input type="email" placeholder="Enter E-mail" name="email" ><br>

    <label for="Address"><b>Address</b></label><br>
    <input type="text" placeholder="Enter Address" name="address"><br>
     <div class="btn">
     <button type="submit" name="btnReg">Register Now</button>
     <button type="submit" name="btnView"><a href='http://localhost/lapsheet-5/view.php' style="color:white";>View</a></button>
     </div>   
    <?php
     
     include_once "function.php";

     if(isset($_POST['btnReg'])){

        $FirstName=$_POST['fname'];

        $LastName=$_POST['lname'];

        $Email=$_POST['email'];

        $Address=$_POST['address'];



   

      

        if(emptyInput($FirstName,$LastName,$Email,$Address)!==false){

             echo "<p style = color:red;>Fill in all fields!</p>";


        }elseif(insertUserData($FirstName,$LastName,$Email,$Address)){

             echo "<p style = color:red;>data added success full</p>";  

        }


        //------------------------------------------------

        

     }

    ?>

 
    
  </div>

</form>

 
 </div>
</body>
</html>