<head>
    <style>
    <?php include 'users.css'; ?>
    </style>
</head>
<body>
<div class="nav-container">
        <nav>
            <div class="logo">
                <p>LOGO</p>
            </div>
            <ul class="nav-lings">
                <li><a href="home.html">Home</a></li>
                
                
                <li><a href="userForm.php">CreateNewUser</a></li>
                <li><a href="Users.php">User</a></li>

            </ul>
            
        </nav>



</body>
</html>


<?php
    include("functions.php");
    
    $users = getAllUserData();
    echo "<br>";
    foreach ($users as $user) {
        echo '
            <div class="user-container">
                <div class="user">
                    <div class="img-avatar">
                        <img src="luxc.svg" alt="Avatar" class="avatar">
                    </div>
           
                    <div class="container">
                        <h4 class="text-center txt">
                            <b>' . $user["firstname"] . " " . $user['lastname'] . '</b>
                        </h4>
             
                        <p class="text-center text-gray txt">' . $user['email'] . '</p>
             
                        <div class="open">
                            <button class="button btn-blue">Open</button>
                        </div>
                    </div>
                </div>
            </div>';
    }
?>

