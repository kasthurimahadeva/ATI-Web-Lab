<?php

function createMysqlConnection(){
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
    $sql = "CREATE DATABASE $dbname";
    if($conn->query($sql)== TRUE)
        {
        echo "DB created Succesfully";
        }
    
}
//createDatabase("wpdb");

function createDBConnection(){
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wpdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die(" DB Connection failed: ".$conn->connect_error);
        }

        echo "$dbname connected successfully <br>";
        return $conn;
}
//createDBConnection();

function createTable(){
    $conn = createDBConnection();
    $sql= "CREATE TABLE users(
        id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR (20) NOT NULL,
        lastname VARCHAR (20) NOT NULL,
        email VARCHAR (20) NOT NULL,
        address VARCHAR (100) NOT NULL,
        age  VARCHAR (3) NOT NULL
        )";

        if ($conn->query($sql) == TRUE) {
            echo "table created successfully";
        } else {
            echo "Error: ".$conn->error;
        }
    }
    createTable();
?>