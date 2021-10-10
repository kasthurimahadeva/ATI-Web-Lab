<?php

    function createMysqlConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        }

        echo "connected successfully <br>";
        return $conn;
    }
    //createMysqlConnection();

    function createDataBase($dbname){
        $conn=createMysqlConnection();
        $sql="CREATE DATABASE $dbname";
        if ($conn->query($sql) == TRUE) {
            echo "Database created";
        } else {
            echo "Error: ".$conn->error;
        }
    }
    //createDataBase("wpdb");

    function createDBConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wpdb";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        }

        echo "$dbname connected successfully <br>";
        return $conn;
    }
    //createDBConnection();

    function createTable($tbName){
        $conn = createDBConnection();
        $sql = "CREATE TABLE $tbName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(20) NOT NULL,
        lastname VARCHAR(20) NOT NULL,
        email VARCHAR(30) NOT NULL,
        address VARCHAR(60) NOT NULL,
        age VARCHAR(10) NOT NULL
        )";

        if ($conn->query($sql) == TRUE) {
            echo "users table created successfully";
        } else {
            echo "Error: ".$conn->error;
        }
    }
    //createTable("users");
?>