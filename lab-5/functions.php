<?php

function createMysqlConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error) {
        die("Connection failed: ".$conn->coonect_error);
    }

    echo "phpMyAdmin Connected Successfully <br>";
    return $conn;
}
//createMysqlConnection();

function createDatabase($dbname){
    $conn = createMysqlConnection();
    $sql = "CREATE DATABASE $dbname";
    if($conn->query($sql)== TRUE)
        {
        echo "DataBase created Succesfully";
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
            die(" DataBase Connection failed: ".$conn->connect_error);
        }

      //  echo "$dbname connected successfully <br>";
        return $conn;
}
//createDBConnection();

function createTable(){
    $conn = createDBConnection();
    $sql= "CREATE TABLE users(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR (20) NOT NULL,
        lastname VARCHAR (20) NOT NULL,
        email VARCHAR (30) NOT NULL,
        address VARCHAR (60) NOT NULL,
        age  INT (3) NOT NULL
        )";

        if ($conn->query($sql) == TRUE) {
            echo "Table created successfully";
        } else {
            echo "Error: ".$conn->error;
        }
    }
    //createTable();

    function insertUserData($firstname, $lastname, $email,$address,$age) {
        $conn = createDBConnection();
        $sql = "INSERT INTO users (firstname, lastname, email ,address,age) 
        VALUES ('$firstname', '$lastname', '$email','$address','$age')";

        $insertId = 0;
        if ($conn->query($sql) == TRUE) {
            echo " User registration completed successfully <br>";
            //print_r($conn);
            $insertId = $conn->insert_id;
        } else {
            echo "Error: ".$conn->error;
        }
        $conn->close();
        return $insertId;
    }
      // insertUserData('Aariyanka', 'Priyanka', 'sspriyanka1997@gmail.com', 'Meesalai west Meesalai', '13');
    
       function getAllUserData(){
        $conn=createDBConnection();
        $sql="SELECT * FROM users";
        $result = $conn->query($sql);

        //print_r($result);
        $users = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        } else {
            echo "There is no records in the table";
        }
        $conn->close();
        return $users;
    }        
?> 