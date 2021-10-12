<?php
    include("functions.php");


    $users = getAllUserData();
    echo "<br>";
    echo "<table border ='2' width ='200px' height ='100px'>
        <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Age</th>
        </tr>";

        foreach ($users as $user){
            echo "<tr>
                <td>".$user['Id']."</td>
                <td>".$user['Firstname']."</td>
                <td>".$user['Lastname']."</td>
                <td>".$user['Email']."</td>
                <td>".$user['Address']."</td>
                <td>".$user['Age']."</td>
                </tr>";
        }
        echo"</table>";
?>