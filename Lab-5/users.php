<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link type="text/css" rel="stylesheet" href="users.css">
</head>
<body>
    <?php
        include ("functions.php");
        $users = getAllUserData();
        foreach($users as $user){
        echo
        '<div class="card">
            <div class="card-img">
                <img src="user.png" alt="user">
            </div>
            <div class="card-info">
                <div>'.$user['firstname'] .' '.$user['lastname'] .'</div>
                <div>'.$user['email'] .'</div>
                <div>'.$user['age'].'</div>
                <div>'.$user['address'].'</div>
                <button class="open-btn">Open</button>
            </div>
        </div>';
        }
    ?>
</body>
</html>