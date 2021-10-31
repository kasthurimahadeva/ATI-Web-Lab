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

function insertUserData($firstname,$lastname,$email,$address,$sex){

    $conn = createDataBase();
    $sql = "INSERT INTO user1(firstname,lastname,email,useraddress,gender)
    VALUES ('$firstname','$lastname','$email','$address','$sex')";

  
    if($conn->query($sql)==true){

      
        die("<p style = color:green;>data added success full !</p>");
           

    }else{

        echo "error".$conn->error;
    }
    
    $conn->close();

}

//----------------insertSubject--------------------------------------

function insertSubject($subName,$stuName){

    $conn = createDataBase();

    $sql= "INSERT INTO sub(subjectname,studentname)VALUES('$subName','$stuName')";

    if($conn->query($sql)==true){

      
        die("<p style = color:green;>data added success full !</p>");
           

    }else{

        echo "error".$conn->error;
    }
    
    $conn->close();


}
//----------------------insertCountry---------------------------------------

function insertCountry($countryName){

    $conn = createDataBase();

    $sql= "INSERT INTO country(countryname)VALUES('$countryName')";

    if($conn->query($sql)==true){

      
        die("<p style = color:green;>data added success full !</p>");
           

    }else{

        echo "error".$conn->error;
    }
    
    $conn->close();


}



