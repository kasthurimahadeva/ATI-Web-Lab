<?php
    include("functions.php");
    $Firstname = $_POST["Firstname"];
    $Lastname = $_POST["Lastname"];
    $Email = $_POST["Email"];
    $Address = $_POST["Address"];
    $Age = $_POST["Age"];

    $Id = insertUserData($Firstname, $Lastname, $Email, $Address, $Age);
    echo "Id: $Id, Firstname: $Firstname, Lastname: $Lastname, Email: $Email, Address:$Address, Age:$Age";
?>