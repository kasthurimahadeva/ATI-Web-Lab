<?php
function createMysqlConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
  if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    echo "Connection successfully <br>";
    return $conn;
}
 //createMySqlConnection();
    function createDatabase($dbname){
     $conn = createMysqlConnection();
     $sql = "CREATE DATABASE $dbname";
     if($conn->query($sql)==TRUE)
          {
              echo "DATABASE created successfully";
          }
 }
 //createDatabase("wpdp");
     function createDBConnection(){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "wpdp";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die(" DATABASE Connection failed: ".$conn->connect_error);

      }
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
    //createTable();
    function insertUserData($firstname, $lastname, $email, $address,$age){
        $conn = createDBConnection();
            $sql = "INSERT INTO users (firstname, lastname, email, address, age)
            VALUES ('$firstname', '$lastname', '$email', '$address', '$age')";

            $insertId = 0;   
            if($conn -> query($sql)==TRUE){
                echo "Data successfully inserted";
                //print_r($conn);
                $insertId = $conn->insert_id;
            }else{
                echo "Error: ".$conn->error;
            }
        
           $conn->close();
           return $insertId;
    }
    # insertUserData('Sainthavi','Jeyakumar', 'sainthavi@gmail.com', 'chavakachcheri', '23');
         
         function getAllUserData(){
             $conn=createDBConnection();
             $sql="SELECT * FROM users";
             $result = $conn->query($sql);

             //print_r($result);
             $users = array();

             if ($result->num_rows > 0) {
                 while ($row = $result->fetch_assoc()){
                     $users[] = $row;
                 }
             } else {
                 echo "There is no recorde in the table";
             }
             $conn->close();
             return $users;
             
         }
?>



    

