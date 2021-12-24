<?php
    include("functions.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Home </title>
        <link rel="stylesheet" href="style.css">
    
    </head>

    <body>
    <div class="main">
            <nav>
                <ul class="nav_links">
                    <li class="nav_li"><a href="index.html" >Home</a></li>
                    <li class="nav_li"><a href="userForm.php">Create User</a></li>
                    <li class="nav_li"><a href="users.php">Users</a></li>
                </ul>
            </nav>
        <div class="heading">All Users Information</div>
                   
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
                            <div class='address'>".$users["addres"] ."</div>
                            <a href='userDetails.php?userId={$users["id"]}' class='btn1 btn-open'>Open</a>
                        </div>
                    </div>";
    
                    }
                    echo"</section>";
                }
                
                

            ?>
    </div>
</body>

</html>