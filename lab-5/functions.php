<?php
#connect with php
 function createMysqlConnection(){
     $servername = "localhost";
     $username = "root";
     $password  = "";
     

     $conn = new mysqli($servername, $username, $password);
     if ($conn -> connect_error){
         die("Connection faild: ".$conn->connect_error);
     }
     echo " connected successfully <br>";
     return $conn;
    }
    #createMysqlConnection();

    function createDatabase($dbname){
        $conn = createMysqlConnection();
        $sql = "CREATE DATABASE $dbname";
        if($conn->query($sql) == TRUE){
           echo "DATABASE created successfully";
        }
      
     }
    # createDatabase("wpdb");

    function createDBConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wpdp";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die ("Database connection faild: ".$conn->connect_error);
        }
       # echo "$dbname connected successfully <br>";
        return $conn;
    }
   # createDBConnection();

 
   function insertUserData($firstname, $lastname, $email,$address,$age) {
    $conn = createDBConnection();
    $sql = "INSERT INTO users (firstname, lastname, email ,address,age) 
    VALUES ('$firstname', '$lastname', '$email','$address','$age')";

    $insertId = 0;
    if ($conn->query($sql) == TRUE) {
        echo " Data successfully inserted <br>";
        //print_r($conn);
        $insertId = $conn->insert_id;
    } else {
        echo "Error: ".$conn->error;
    }
    $conn->close();
    return $insertId;
}
 # insertUserData('laksiga', 'Thangarasa', 'laxsi@gmail.com', 'pandarikulam,vavuniya', '23');

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