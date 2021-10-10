<?php
 
 //---------------------------validation-----------------------

function emptyInput($fname,$lname,$email,$address){

    if(empty($fname) || empty($lname) || empty($email) || empty($address)){

        $result = true;

    }else{

        $result = false;
    }

 return $result;

}

//-------------------------DataBaseConnection-----------

function createDataBase(){
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='wpdp';

    $conn= new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){

        die("connection failed :".$conn->connect_error);

    }else{

        return $conn;

    }

}


//--------------------------inserttable--------------------------

function insertUserData($firstname,$lastname,$email,$address){

    $conn = createDataBase();
    $sql = "INSERT INTO user1 (firstname,lastname,email,useraddress)
    VALUES ('$firstname','$lastname','$email','$address')";

  
    if($conn->query($sql)==true){

      
        die("<p style = color:green;>data added success full !</p>");
           

    }else{

        echo "error".$conn->error;
    }
    
    $conn->close();

}

//----------------------------viewInformation---------------------------------

function getAllUserData() {
  
    $sql = "SELECT * FROM user1";
  
    $stmt =   createDataBase() -> query($sql);

    echo "<table border=1px>
            <tr>
                <th>userId</th>
                <th>First Name</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
    ";  

    while($row = $stmt ->fetch_assoc()) {            
        
        echo "
            <tr>
                <td>" . $row['id'] . " </td>
                <td>" . $row['firstname'] . " </td>
                <td>" . $row['lastname'] . " </td>
                <td>" . $row['email'] . " </td>
                <td>" . $row['useraddress'] . " </td>
            </tr>
        ";

    }

    echo "</table>";

}

//-------------------------update------------------------------------

//  function updateUser($id,$firstname,$lastname,$email,$address) {        

//     $sql = " UPDATE user1 SET  firstname = ?, lastname = ? , email = ? ,useraddress = ? WHERE id = ? ";

//     $stmt = createDataBase() -> prepare($sql);

//     echo $stmt;

    // $stmt -> execute([$id,$firstname,$lastname,$email,$address]);

// }
