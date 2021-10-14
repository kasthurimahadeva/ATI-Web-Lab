<!DOCTYPE html>
<html>
<head>
    <style>
    <?php include 'users.css'; ?>
    </style>
</head>
<body>

</body>
</html>
<?php
    include("functions.php");
    


    $users = getAllUserData();
    echo "<br>";
    foreach ($users as $user) {
        echo '
            <div class="card-container">
                <div class="card">
                    <div class="avatar-container">
                        <img src="avathar1.jpg" alt="Avatar" class="avatar">
                    </div>
           
                    <div class="container">
                        <h4 class="text-center m-b-15">
                            <b>' . $user["firstname"] . " " . $user['lastname'] . '</b>
                        </h4>
             
                        <p class="text-center text-gray m-b-15">' . $user['email'] . '</p>
             
                        <div class="m-b-10">
                            <button class="button btn-blue">Open</button>
                        </div>
                    </div>
                </div>
            </div>';
    }
?>