<?php
    include("functions.php");
    $uId=$_GET['userId'];
    deleteUserData($uId);

    header("Location:users.php");
    exit();
?>