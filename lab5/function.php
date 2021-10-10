<?php
/*
function createMysqlConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

   $conn = new mysqli($servername, $username, $password);
     if($conn->connect_error) {

        die("Connection failed: ".$conn->coonect_error);
    }
     echo "Server Connection Successfully <br>";
     return $conn;
}
//createMysqlConnection();

function createDatabase($dbname){
    $conn = createMysqlConnection();
    $sql = "CREATE DATABASE webdatabase";
    if($conn->query($sql)== TRUE)
        {
        echo "Database created Succesfully";
        }
        else {
            echo " Error: ".$conn->error;
            }    
}
//createDatabase();
*/

function createDBConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webdatabase";

    $conn = new mysqli ($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die (" DB Connection failed: ".$conn->connect_error);
    }
    else{
    echo "connected successfully <br>";
    }
    return $conn;
}

//createDBConnection();
/*

function createTable(){
    $conn = createDBConnection();

    $sql = "CREATE TABLE users (
        id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(20) NOT NULL,
        lastname VARCHAR(20) NOT NULL,
        email VARCHAR(50) NOT NULL,
        address VARCHAR(100) NOT NULL,
        age VARCHAR(3) NOT NULL
    )";

    if ($conn->query ($sql) == TRUE)
    {
        echo "Table created successfully";
    }
    else {
        echo "ERROR: ".$conn->error;
    }
}
//createTable();   
*/

function insertUserData ($firstname, $lastname, $email, $address, $age){
    $conn = createDBConnection();
    $sql = "INSERT INTO users ( firstname, lastname, email, address, age )
    VALUES ('$firstname', '$lastname', '$email', '$address', '$age')";


    $insertId = 0;
    if($conn->query($sql) == TRUE) {
        echo  "User Registration completed successfully <br>";
        //print_r($conn);
        $insertId = $conn->insert_id;
     }
     else{
         echo "Error: ".$conn->error;
     }
    $conn->close();
    return $insertId;

}
//insertUserData ($firstname, $lastname, $email, $address, $age);

function alluserdata ()
{
$conn = createDBConnection ();
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

//print_r ($result);
$users = array();

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc())
    {
        $users[] = $row;
        }
} else {
    echo "There is no records inthe table";

}
$conn->close();
return $users;
}
//alluserdata();


?>