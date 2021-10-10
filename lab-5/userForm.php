<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home page</title>
</head>

<body>
    <div class="main">
        <header>
            <div class="logo">
                <img src="Image/logo.png" alt="logo">
                <div class="logo-txt">Information</div>
            </div>
            <nav>
                <ul class="nav_links">
                    <li class="nav_li"><a href="index.html">Home</a></li>
                    <li class="nav_li"><a href="userForm.php" style="background-color: rgb(16, 172, 81);">Create User</a></li>
                    <li class="nav_li"><a href="users.php">Users</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <div class="frm-body">
                <div class="frm-title">Insert Details</div>
                <form action="userData.php" method="POST">
                    <div class="row">
                        <div class="input-data">
                            <label for="fname">First Name</label> <br>
                            <input type="text" name="fname" id="fname" class="textbox">
                        </div>
                        <div class="input-data">
                            <label for="lname">Last Name</label> <br>
                            <input type="text" name="lname" id="lname" class="textbox">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-data">
                            <label for="email">Email</label> <br>
                            <input type="email" name="email" id="email" class="textbox">
                        </div>
                        <div class="input-data">
                            <label for="age">Age</label> <br>
                            <input type="age" name="age" id="age" class="textbox">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-data">
                            <label for="address">Address</label> <br>
                            <textarea name="address" id="address" cols="30" rows="2" class="txtArea"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-data">
                            <input type="submit" value="submit" name="submit" class="btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <div class="main-footer">
                <div class="logo"><img src="Image/logo.png">
                    <div class="logo-txt">Information</div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="TextCopyR">Copyright 2022, Example Corporation</div>
            </div>

        </footer>
    </div>
    </div>
</body>

</html>