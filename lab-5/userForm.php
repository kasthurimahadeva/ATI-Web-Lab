<?php
    include("functions.php");
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title> Home </title>
</head>

<body>
    <div class="main">
            <nav>
                <ul class="nav_links">
                    <li class="nav_li"><a href="index.html">Home</a></li>
                    <li class="nav_li"><a href="userForm.php">Create
                            User</a></li>
                    <li class="nav_li"><a href="users.php">Users</a></li>
                </ul>
            </nav>
        <div class="content">
            <div class="frm-body">
                <?php
                    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
                        $url = "https://";   
                     else  
                        $url = "http://";   

                    $url.= $_SERVER['HTTP_HOST'];   
               
                     $url.= $_SERVER['REQUEST_URI'];    
                 
                
                    if (stripos($_SERVER['REQUEST_URI'], 'userId' )!==false){
                       
                        $uId=$_GET['userId'];
                        $Z=getUserDetails($uId,"users");
                        $frName=$Z[0]['firstname'];
                        $lsName=$Z[0]['lastname'];
                        $userMail=$Z[0]['email'];
                        $userAge=$Z[0]['age'];
                        $userAddress=$Z[0]['addres'];

                        echo"
                        <div class='frm-title'>update existing user : $frName </div>
                            <form action='userData.php' method='POST'>
                                <div class='row'>
                                    <div class='input-data'>
                                        <label for='fname'>First Name</label> <br>
                                        <input type='text' name='id' id='fname' class='textbox' value='$uId' style='display:none;'>
                                        <input type='text' name='fname' id='fname' class='textbox' value='$frName'>
                                    </div>
                                    <div class='input-data'>
                                        <label for='lname'>Last Name</label> <br>
                                        <input type='text' name='lname' id='lname' class='textbox' value='$lsName'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-data'>
                                        <label for='email'>Email</label> <br>
                                        <input type='email' name='email' id='email' class='textbox' value='$userMail'>
                                    </div>
                                    <div class='input-data'>
                                        <label for='age'>Age</label> <br>
                                        <input type='age' name='age' id='age' class='textbox' value='$userAge'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-data'>
                                        <label for='address'>Address</label> <br>
                                        <textarea name='address' id='address' cols='30' rows='2' class='txtArea' >$userAddress</textarea>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-data'>
                                        <input type='submit' value='update' name='submit' class='btn'>
                                    </div>
                                </div>
                            </form>
                        ";

                    } 
                    else {
                        
                        echo"
                        <div class='frm-title'>Insert Details</div>
                            <form action='userData.php' method='POST'>
                                <div class='row'>
                                    <div class='input-data'>
                                        <label for='fname'>First Name</label> <br>
                                        <input type='text' name='fname' id='fname' class='textbox'>
                                    </div>
                                    <div class='input-data'>
                                        <label for='lname'>Last Name</label> <br>
                                        <input type='text' name='lname' id='lname' class='textbox'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-data'>
                                        <label for='email'>Email</label> <br>
                                        <input type='email' name='email' id='email' class='textbox'>
                                    </div>
                                    <div class='input-data'>
                                        <label for='age'>Age</label> <br>
                                        <input type='age' name='age' id='age' class='textbox'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-data'>
                                        <label for='address'>Address</label> <br>
                                        <textarea name='address' id='address' cols='30' rows='2' class='txtArea'></textarea>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-data'>
                                        <input type='submit' value='submit' name='submit' class='btn'>
                                    </div>
                                </div>
                            </form>
                        ";
                    }
                    
                ?>

            </div>
        </div>
    </div>

</body>

</html>