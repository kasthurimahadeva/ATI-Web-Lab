<?php
    include("functions.php");
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $age = $_POST["age"];

    $id = insertUserData($firstname, $lastname, $email, $address, $age);
?>