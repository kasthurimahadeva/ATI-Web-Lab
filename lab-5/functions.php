<?php

    function createMysqlConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }
            else
                {
                    echo "Sever connected successfully";
                }

            return $conn;
    }

    #createMysqlConnection();

    function createDataBase($dbname){
        
        $conn = createMysqlConnection();
        $sql = "CREATE DATABASE wpdb";

        if ($conn->query($sql) === TRUE)
        {
            echo "DB cretaed successfully";
        }
        else
            {
                echo "Error: ".$conn->error;
            }

        return $conn;
    }

    #createDataBase("wpdb");

    function createDBConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wpdb";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }
            else
                {
                    echo "Database connected successfully";
                }

            return $conn;         
    }

    #createDBConnection();   
    
    function createTable(){

        $conn = createDBConnection();
        $sql = "CREATE TABLE users (
            id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(25) NOT NULL,
            lastname VARCHAR(25) NOT NULL,
            email VARCHAR(50) NOT NULL,
            addres VARCHAR(100) NOT NULL,
            age INT(2) NOT NULL)";

        if ($conn->query($sql) === TRUE)
        {
            echo "users table created successfully";
        }
        else
            {
                echo "Error: " .$conn->error;
            }
        
        return $conn;    
    }

    #createTable();
?>