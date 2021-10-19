<?php

    function createMysqlConnection()
    {
        $severname = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new mysqli($severname, $username, $password);
        if ($conn->connect_error)
        {
            die("Connection failed:" .$conn->connect_error);
        }
        else
            {
                echo "Sever connected successfully";
            }

        return $conn;
    }

    #createMysqlConnection();

    function createDataBase($dbname)
    {
        $conn = createMysqlConnection();
        $sql = "CREATE DATABASE wpdb";

        if ($conn->query($sql) === TRUE)
        {
            echo "DB created successfully";
        }
        else
            {
                echo "Error:" .$conn->error;
            }

        return $conn;
    }

    #createDataBase("wpdb");

    function createDBConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wpdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error)
        {
            die("Connection failed:" .$conn->connect_error);
        }
        /*else    
            {
                echo "Database connected successfully";
            }*/
        return $conn;
    }

    #createDBConnection();      

    function createTable()
    {
        $conn = createDBConnection();
        $sql = "CREATE TABLE users (
                id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(80) NOT NULL,
                address VARCHAR(100) NOT NULL,
                age INT(2) NOT NULL)";

        if ($conn->query($sql) === TRUE)
        {
            echo "users table created successfully";
        }
        else    
            {
                echo "Error:" .$conn->connect_error;
            }
        return $conn;
    }

    #createTable();

    function insertUserData($firstname, $lastname, $email, $address, $age)
    {
        $conn = createDBConnection();
        $sql = "INSERT INTO users (firstname, lastname, email, address, age)
                VALUES ('$firstname', '$lastname', '$email', '$address', '$age')";

                if ($conn->query($sql) === TRUE)
                {
                    echo "Data successfully inserted";
                }
                else   
                {
                    echo "Error:".$conn->error;
                }
            $conn->close();
    }

    #insertUserData('Chris', 'Shan', 'chris@gmail.com', 'Nallur', '22');

    function getAllUserData(){
        $conn = createDBConnection();

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        $users = array(); 

        if ($result->num_rows > 0)
        {
            while ($record = $result->fetch_assoc())
            {
               $users[] = $record;
            }
        }
        else 
            {
                 echo "There is no records here";
            }
     
        #print_r($users);
        return $users;
    }

    #getAllUserData();
    

?>