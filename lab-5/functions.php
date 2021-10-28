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

       # echo "$dbname connected successfully <br>";
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

    function insertUserData($firstname, $lastname, $email, $address, $age) {
        $conn = createDBConnection();
        $sql = "INSERT INTO users (firstname, lastname, email, address, age) 
        VALUES ('$firstname', '$lastname', '$email', '$address', '$age')";
        
        $insertId = 0;
        if ($conn->query($sql) == TRUE) {
            #echo "Data successfully inserted <br>";
            $insertId = $conn->insert_id;
        } else {
            #echo "Error: ".$conn->error;
        }
        $conn->close();
        return $insertId;
    }
    //insertUserData("Sivatharan", "Ponsivaranjan", "stn@gmail.com", "Valvettithurai, Polikandy-East, Jaffna.","24");

    function getAllUserData($tbName) {
        $conn = createDBConnection();

        $sql = "SELECT * FROM $tbName";
        $result = $conn->query($sql);

        #print_r($result);
        $users = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        } else {
            //echo "There is no records in the table";
        }
        $conn->close();
        return $users;
    }

    function getUserDetails($userId,$tbName){
        $conn = createDBConnection();

        $sql = "select * from $tbName where id =$userId";
        $result = $conn->query($sql);

        //print_r($result);
        //pre_r($result);
        $user = array();
        //pre_r($user);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user[]=$row;
               // pre_r($user);
               // echo $user[0]['firstname'];
            }
        } else {
            echo "There is no records in the table";
        }
        $conn->close();
        return $user;
    }
    //getUserDetails("2","users");

    function updateExistingUser($id,$firstname,$lastname,$email,$age,$address) {
        $conn = createDBConnection();

        $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', age='$age', address='$address' WHERE id=$id";

        if ($conn->query($sql) == TRUE) {
            //echo "Updated successfully";
        } else {
            echo "Error: ".$conn->error;
        }
    }

    function deleteUserData($uid) {
        $conn = createDBConnection();

        $sql = "DELETE FROM users WHERE id=$uid";
        if($conn->query($sql) == TRUE) {
            //echo "Data deleted successfully";
        } else {
            echo "Error: ".$conn->error;
        }
    }

    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>