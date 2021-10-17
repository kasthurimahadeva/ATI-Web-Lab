<?php
    include("functions.php");
?>
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
                    <li class="nav_li"><a href="index.html" >Home</a></li>
                    <li class="nav_li"><a href="userForm.php">Create User</a></li>
                    <li class="nav_li"><a href="users.php" style="background-color: rgb(16, 172, 81);">Users</a></li>
                </ul>
            </nav>
        </header>
        <div class="heading">All Users Information</div>
        <!--
        <section class="container">
-->
            <!--
                <div class="card">
                    <div class="bg-image">
                        <div class="img"></div>
                    </div>
                    <div class="pic">
                        <img src="Image/user1.jpeg" alt="">
                    </div>
                    <div class="info">
                        <div class="firstname">FirstName</div>
                        <div class="lastname">LastName</div>
                        <div class="emailA">person@gamil.com</div>
                        <div class="age">24 years old</div>
                        <div class="from">From</div>
                        <div class="address">Palavitheru Polikandy valvettithurai </div>
                        <button class="open-btn">open</button>
                    </div>
                </div>

                <div class="card">
                    <div class="bg-image">
                        <div class="img"></div>
                    </div>
                    <div class="pic">
                        <img src="Image/user1.jpeg" alt="">
                    </div>
                    <div class="info">
                        <div class="firstname">FirstName</div>
                        <div class="lastname">LastName</div>
                        <div class="emailA">person@gamil.com</div>
                        <div class="age">24 years old</div>
                        <div class="from">From</div>
                        <div class="address">Palavitheru Polikandy valvettithurai </div>
                        <button class="open-btn">open</button>
                    </div>
                </div>
-->
            <?php
                echo"<section class='container'>";
                $users = getAllUserData("users");

                if(empty($users)){
                    echo"<div class='card'>
                    <div class='bg-image'>
                        <div class='img'></div>
                    </div>
                    <div class='pic'>
                        <img src='Image/user1.jpeg' alt='user'>
                    </div>
                    <div class='info'>
                        <img src='Image/box1.png' style='width: 150px; height: 150px; diplay:block; padding:10px 0px;'>
                        <div style='color:white;font-family: sans-serif;'>There is no records found</div>
                    </div>
                </div>
                </section>";
                }
                else
                {
                    foreach($users as $users){
                        echo"<div class='card'>
                        <div class='bg-image'>
                            <div class='img'></div>
                        </div>
                        <div class='pic'>
                            <img src='Image/user1.jpeg' alt='user'>
                        </div>
                        <div class='info'>
                            <div class='firstname'> " .$users["firstname"] . "</div>
                            <div class='lastname'>".$users["lastname"] . "</div>
                            <div class='emailA'>".$users["email"] . "</div>
                            <div class='age'>".$users["age"] . " years old </div>
                            <div class='from'>From</div>
                            <div class='address'>".$users["address"] ."</div>
                            <a href='userDetails.php?userId={$users["id"]}' class='btn1 btn-open'>Open</a>
                        </div>
                    </div>";
    
                    }
                    echo"</section>";
                }
                
                

            ?>
            <!--</section>-->
            
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
</body>

</html>