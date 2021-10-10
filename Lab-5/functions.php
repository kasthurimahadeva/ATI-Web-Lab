<?php

    function createMysqlConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";
    
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die ("Connection failed: ".$conn->connect_error);
    } else {
        echo "Connected successfully!";
    }
}
    //createMysqlConnection()

    function createDataBase($databaseName) {
        $conn = createMysqlConnection();
        $sql = "CREATE DATABASE $databaseName";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully!";
        } else {
            echo "Error creating database: ".$conn->error;
        }
    }
    //createDataBase("wpdb")

    function createDBConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wpdb";

    $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die ("Database connection failed: ".$conn->connect_error);
        } else {
            echo "Database connected successfully!";
        }
    }
    //createDBConnection()

    function createTable($tablename) {
        $conn = createDBConnection();
        $sql = "CREATE TABLE $tablename (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL,
            address VARCHAR(100) NOT NULL,
            age INT(3) NOT NULL
            )";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table created successfully!";
        } else {
            echo "Error creating table: ".$conn->error;
        }
    }
    //createTable("users")

    function insertUserData($firstname, $lastname, $email, $address, $age) {
        $conn = createDBConnection();
        $sql = "INSERT INTO users (firstname, lastname, email, address, age)
                VALUES ('$firstname', '$lastname', '$email', '$address', '$age')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created succsessfully!";
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
    //insertUserData('John', 'Wick', 'j0hn_w1ck@gmail.com', '121 Mill Neck in Long Island, NY', 35)

?>