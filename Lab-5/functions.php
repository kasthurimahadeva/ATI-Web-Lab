<?php
    function createMysqlConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername, $username, $password);

        if ($conn -> connect_error) {
            die ("Connection failed: ". $conn -> connect_error);
        }
        echo "Connected successfully! <br>";
        return $conn;
    }
    //createMysqlConnection();

    function createDataBase($databaseName) {
        $conn = createMysqlConnection();

        $sql = "CREATE DATABASE $databaseName";

        if ($conn -> query($sql) == TRUE) {
            echo "Database created successfully!";
        } else {
            echo "Error: ".$conn -> error;
        }
    }
    //createDataBase('webpro');

    function createDBConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webpro";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn -> connect_error) {
            die("Connection failed: ". $conn -> connect_error);
        }
        //echo "$dbname Connected successfully!";
        return $conn;
    }
    //createDBConnection();

    function createTable($tablename) {
        $conn = createDBConnection();

        $sql = "CREATE TABLE $tablename (
        id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(20) NOT NULL,
        lastname VARCHAR(20) NOT NULL,
        email VARCHAR(30) NOT NULL,
        address VARCHAR(50) NOT NULL,
        age VARCHAR(3) NOT NULL
        )";

        if ($conn -> query($sql) == TRUE) {
            echo "$tablename Created successfully!";
        } else {
            echo "Error: ". $conn -> error;
        }
    }
    //createTable('users');

    function insertUserData($firstname, $lastname, $email, $address, $age) {
        $conn = createDBConnection();

        $sql = "INSERT INTO users (firstname, lastname, email, address, age)
                VALUES ('$firstname', '$lastname', '$email', '$address', '$age')";
        
        if ($conn -> query($sql) == TRUE) {
            echo "user data Inserted successfully!";
        } else {
            echo "Error: ". $conn -> error;
        }
    }
    //insertUserData('John', 'Wick', 'j0hn_w1ck@gmail.com', '121 Mill Neck in Long Island, NY', 35);

    function getAllUserData() {
        $conn = createDBConnection();
        $sql = "SELECT * FROM users";
        $result = $conn -> query($sql);

        $users = array();

        if($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $users[] = $row;
            }
        } else {
            echo "No records in the table";
        }
        return $users;
    }
?>