<?php
    include("functions.php");
    //   $lastname = $_POST["lastname"];
    //   $email = $_POST["email"];
    //    $address = $_POST["address"];
    //   $age = $_POST["age"];
    //  $firstname = $_POST["firstname"];

 //  $id = insertUserData($firstname, $lastname, $email, $address, $age);
 //  echo "Id: $id, First Name: $firstname, Last Name: $lastname, Email: $email, Address:$address, Age:$age";


    $users = getAllUserData();
    echo "<br>";
    foreach ($users as $user) {  

           echo

           " <table style='width:300px; background-color:#white' border: 1px solid black; border color:#0000FF;}>

            <tr>
                <th font-size:50px; colspan='7'> PROFILE </th>
            </tr>

            <tr>
                <th colspan='7'><img src='avatar.jpg'  width='50' height='60'></th>
             </tr>

            <tr>
                <th>Id</th>
                <td>0".$user['id']."</td>
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
            echo "<br>";
    }
    echo "</table>";
?>
