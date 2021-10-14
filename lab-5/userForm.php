<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="userform.css">
    </head>
    <body>
        <div class="container">
            <img class="wave" src="w2.png">
            <div class="img">
                <img src="undraw_unlock_24mb.svg">
            </div>
            
            <div class="login-container">
                <img class="avatar" src="undraw_female_avatar_w3jk.svg">
                <form action="Userdata.php" method="POST">
                
                <label>Firstname:</label><BR>
                <input type="text" class="txt" name="firstname" placeholder="Enter first name"/><br><br>
            
                <label>Lastname</label><BR>
                <input type="text" class="txt" name="lastname" placeholder="Enter your Lastname"/><br><br>
              
                <label>Email Id</label><BR>
                <input type="email" class="txt" name="email" placeholder="Enter your Email id"/><br><br>

                <label>Address:</label><BR>
                    <input type="text" class="txt" name="address" placeholder="Enter your address"/><br><br>

                <label>Age</label><BR>
                    <input type="text" class="txt" name="age" placeholder="Enter your Age"/><br><br>

                <input type="submit" class="btn" name="submit" value="submit">
                <a href="indexx.html">Cancel</a>
              
        </form>
    </div>
        </div>
    </body>
</html>