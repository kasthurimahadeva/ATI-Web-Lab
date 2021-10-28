<?php
    include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home page</title>
</head>

<body>
    <div class="main">
        <header>
            <div class="logo">
                <img src="Image/logo.png" alt="logo">
                <div class="logo-txt">Information</div>
            </div>
            <nav>
                <ul class="nav_links">
                    <li class="nav_li"><a href="index.html">Home</a></li>
                    <li class="nav_li"><a href="userForm.php" style="background-color: rgb(16, 172, 81);">Create
                            User</a></li>
                    <li class="nav_li"><a href="users.php">Users</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <div class="frm-body">
                <?php
                    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                        $url = "https://";   
                     else  
                        $url = "http://";   
               // Append the host(domain name, ip) to the URL.   
                    $url.= $_SERVER['HTTP_HOST'];   
               
               // Append the requested resource location to the URL   
                     $url.= $_SERVER['REQUEST_URI'];    
                 
                   // echo $url ."<br>";  
                
                    if (stripos($_SERVER['REQUEST_URI'], 'userId' )!==false){
                        //echo "userId here";
                        $uId=$_GET['userId'];
                        $Z=getUserDetails($uId,"users");
                        $frName=$Z[0]['firstname'];
                        $lsName=$Z[0]['lastname'];
                        $userMail=$Z[0]['email'];
                        $userAge=$Z[0]['age'];
                        $userAddress=$Z[0]['address'];

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
                        //echo "No userId here";
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

        
        <footer>
            <div class="main-footer">
                <div class="logo"><img src="Image/logo.png">
                    <div class="logo-txt">Information</div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="TextCopyR">Copyright 2022, Example Corporation</div>
            </div>

        </footer>
    </div>

</body>

</html>