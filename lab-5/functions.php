<?php
    
    function createMysqlConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }else{
        echo "Server connected successfully <br>";
    }
    return $conn;
}
    createMysqlConnection();                                              //createMysqlConnection
 
  
    function createDtataBase(){
        $conn = createMysqlConnection();
        $sql = "CREATE DATABASE wpdb";

        if ($conn->connect_error){
            die("connection failed :" .$conn->connect_error);
        }else{
            echo "Create Database Sucessfully <br>"; 
        }
        return $conn;
    }
    createDtataBase();                                                   //Create Database

    
    function createDBConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wpdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error){
            die("DB Connection failed: ".$conn->connect_error);
        }else{
            echo "Database connected sucessfully <br>";
        }
        return $conn;
    }
    createDBConnection();                                                //create DB Connection 

/*
    function createTable(){
        $conn = createDBConnection();
        $sql = "CREATE TABLE users (
        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Firstname VARCHAR (20) NOT NULL,
        Lastname VARCHAR (20) NOT NULL,
        Email VARCHAR (50) NOT NULL,
        Address VARCHAR (100) NOT NULL,
        Age VARCHAR (3) NOT NULL
        )";

        if ($conn->query($sql) == TRUE){ 
           echo "Created table sucessfully";
        }else {
            echo "Table created Error: ".$conn->error;
        }
    }
    createTable();       */                                                //Create Table                                                          
    
    // Insert User Data
    function insertUserData ($Firstname, $Lastname, $Email, $Address, $Age) {
        $conn = createDBConnection();
        $sql = "INSERT INTO users (Firstname, Lastname, Email, Address, Age)
        VALUES ('$Firstname', '$Lastname', '$Email', '$Address', '$Age')";

        $insertId = 0;
        if ($conn->query($sql) == TRUE){
            echo "Data sucessfully inserted <br>";
            print_r($conn);
            $insertId = $conn->insert_id;
        }else{
            echo "Error: ".$conn->error;
        }
        $conn->close();
        return $insertId;
    }


?>