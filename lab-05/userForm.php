<!DOCTYPE html>
<html>
    <head>
       
        <link rel="stylesheet" href="userForm.css" type="text/css">
       
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

            <div class="box">
                <img src="logo.png" class="user">
                    <h1>New user Form</h1>
     
                    <form name="myform" action="userData.php" method="POST">

                        <p>Firstname:</p>
                        <input type="text" name="firstname" placeholder="Enter firstname" required="">
                        <p>Lastname:</p>
                        <input type="text" name="lastname" placeholder="Enter lastname" required="">
            
            
                        <p>Email:</p>
                        <input type="email" name="email" placeholder="Enter email" required="">

                        <p>Address:</p>
                        <input type="text" name="address" placeholder="Enter address" required="">

                        <p>Age:</p>
                        <input type="text" name="age" placeholder="Enter age" required="">
                        
                        <input type="submit" name="submit" value="submit">
            
                        <br>
                       <center> <a href="index.html">CANCEL </a></center>
                    
            
                    </form>
            
        </header>
        <div class="banner">
        </div>


       
        <footer>
            <p>All right reserved by our website</p>
        </footer>


    </body>
</html>