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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #D3D3D3;}


</style>
<body>
<form action="" method="post">
    <h1>Registation</h1>

    <div class="img">
        <img src="pic_1.jpg" alt="register">
    </div>
  
  <div class="container">
    
     

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
     <button type="submit" name="btnView">View</a></button>
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

     }

    echo '</form> </div> <br><br> <hr><br>';

     if(isset($_POST['btnView'])){

  
    $sql = "SELECT * FROM user1";
  
    $stmt =   createDataBase() -> query($sql);

    echo "<table border=1px style=''>
            <tr>
                <th>userId</th>
                <th>First Name</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Address</th>
                <th>update</th>
                <th> delete</th>
            </tr>
    ";  

    while($row = $stmt ->fetch_assoc()) {            
        
        echo "
            <tr>
                <td>" . $row['id'] . " </td>
                <td>" . $row['firstname'] . " </td>
                <td>" . $row['lastname'] . " </td>
                <td>" . $row['email'] . " </td>
                <td>" . $row['useraddress'] . " </td>
                <td> <a href ='http://localhost/lapsheet-5/update.php'><button type='submit' name='btnupdate' style='width:50% ; background-color:	#20B2AA'; href=''>Update</button></a></td>
                <td> <a href ='http://localhost/lapsheet-5/delete.php'><button type='submit' name='btndelete' style='width:50% ; background-color:#8B0000'>Delete</button></a></td>
            </tr>
        ";

    }
}

if(isset($_POST['btnupdate'])){

}
  
  

    ?>

 
    
  



 
 </div>
</body>
</html>