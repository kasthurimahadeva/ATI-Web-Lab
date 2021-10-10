<!DOCTYPE html>
<html>
    <head>
        <style>
*{
    margin: 0;
    padding: 0;
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

    $users = getAllUserData();
    echo "<br>";
    echo "<style>*{background-color : skyblue;} </style>";
    echo  "<h2 style='text-align: center;'>User Details</h2>";
    foreach ($users as $user) {  
           echo

           " <table style='width:300px; float: left; padding: 5px;' border: 1px solid black; border color:#0000FF;}>

            <tr>
                <th font-size:50px; colspan='7'> USER ".$user['id']."</th>
            </tr>

            <tr>
                <th colspan='7'><img src='user.png'  width='50' height='60'></th>
             </tr>

            <tr>
                <th>Id</th>
                <td>000".$user['id']."</td>
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
                <th>Address</th>
                <td>".$user['address']."</td>
            </tr>

            <tr>
                <th>Age</th>
                <td>".$user['age']."</td>
            </tr> " ; 
            
    }
    echo "</table>";
?>
