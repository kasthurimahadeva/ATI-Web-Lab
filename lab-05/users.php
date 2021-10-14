<!DOCTYPE html>
<html>
    <head>
        <title>Aariyanka</title>
        <link rel="stylesheet" href="users.css" type="text/css">
        
        <style>
               .team{
                      display: inline-flex;
                      justify-content: space-around;
                      width: auto;
                      text-align: center;
                      flex-wrap: wrap;
                    }
                table{
                    margin-bottom:50px;
                    padding: 20px;
                    
                }    
               
                    
        </style>
    </head>
    <body>
    
        <header>
            <div class="logo">logo</div>
            <nav>
                <ul>
                    <li> <a href="index.html"> Home</a></li>
                    <li> <a href="userForm.php">Create User</a></li>
                    <li> <a href="users.php"> Users</a></li>
                </ul>
            </nav>
</header>
<br>
<h1><center><b><i>All User Data</i></b></center></h1>
<br><br>
<div class="team">
<?php
    include("functions.php");
     $users = getAllUserData();
    echo "<br>";
    foreach ($users as $user) { 
         echo
         '<div class="box">
                <div class="box-card">
                    <div class="aari-container">
                        <img src="aari.jpg" alt="aari" class="aari">
                    </div>
           
                    <div class="container">
                        <h4 class="text-center black">
                            <b>' . $user["firstname"] . " " . $user['lastname'] . '</b>
                        </h4>
             
                        <p class="text-center text-gray black">' . $user['email'] . '</p>
             
                        <div class="btn">
                            <button class="button btn-blue">OPEN</button>
                        </div>
                    </div>
                </div>
            </div>';
    }
?>

      <!--   " <table style='width:300px; background-color:#black; border: 1px solid black; border color:#0000FF;}>
            
         <tr>
         <th font-size:50px; colspan='7'>  </th>
             <th colspan='7'><img src='aari.jpg'  width='50' height='60'></th>
          </tr>
        
         <tr>
             <th>First Name</th>
             <td>".$user['firstname']."</td>
         </tr>
         <tr>
             <th>Last Name</th>
             <td>".$user['lastname']."</td>
         </tr>
         <tr>
         <th>Email</th>
             <td>".$user['email']."</td>
         </tr>
         
         
         <tr>
         <td align-items:center;><a href='userDetails.php' class='open'> <input type='submit' value='OPEN' class='btn'></a></td>
         </tr><br>
         " ; 
         echo " <br><br><br><br><br><br><br><br><br>";
 }
 echo "</table>";
 
 
?>
-->

</div>
<br> <br><br>
   
<footer>
    <p>All right reserved by our website</p>
</footer>

</body>

</html>