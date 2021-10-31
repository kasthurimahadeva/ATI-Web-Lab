<!DOCTYPE html>
<html>
    <head>
        <title>Lab-5</title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
    font-family: serif;
}
ul li{
    list-style: none;
    display: inline;
    margin-left: 20px;
    margin-right: 20px;
}
li a{
    text-decoration: none;
    text-transform: uppercase;
    color: black;
}
.navbar{
    width: 85%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 100px;
    padding-top: 25px;
}
        </style>
    </head>
    <body>
        <div class="main">
            <nav class="navbar">
                <div></div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="userForm.php">Create User</a></li>
                    <li><a href="users.php">Users</a></li>
                </ul>
            </nav>
        </div>
    </body>
</html>
<?php
include("function.php");
$users = getAllUserDetails(); 
foreach ($users as $user) {  
 echo "
<html>
    <head>
        <title>Users</title>
        <link rel='stylesheet' href='userdetails.css'>
    </head>
<body>
    <div class='user-box'>
        <form name='loginForm' action='userDetails.php'>
        <h2>USER 000".$user['id']."</h2>
            <div class='img'>
                 <img src='user.png' width='80px' height='80px'></div>
                 <li>
                 <ul>Fullname: ".$user['firstname'].' '.$user['lastname']."</ul>
                 <ul>E-mail: ".$user['email']."</ul>
                 <ul>Address: ".$user['address']."</ul>
                 <ul>Age: ".$user['age']."</ul>
                </li>
               
        </form>
        <a href='userDetails.php?userId={$user["id"]}'><input type='button' value='Open'></a>
    </div>
</body>
</html>";
}?>