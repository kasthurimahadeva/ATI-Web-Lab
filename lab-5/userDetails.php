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
                    <li class="nav_li"><a href="userForm.php">Create User</a></li>
                    <li class="nav_li"><a href="users.php" style="background-color: rgb(16, 172, 81);">Users</a></li>
                </ul>
            </nav>
        </header>
        <div class="heading">User Information</div>

        <section class='container-detail'>
            <?php
    include("functions.php");
     $uId=$_GET['userId'];
     $Z=getUserDetails($uId,"users");
    // //print_r($Z['0']['firstname']);
    // echo $Z['0']['lastname'];
    echo"

    <div class='card-detail'>
                    <div class='bg-image-detail'>
                        <div class='img-detail'></div>
                    </div>
                    <div class='pic-detail'>
                        <img src='Image/user1.jpeg' alt='user'>
                    </div>
                    <div class='info-detail'>
                        <div class='firstname-detail'> Name :&ensp;" .$Z['0']['firstname'] . "</div>
                        <div class='lastname-detail'>&ensp;".$Z['0']['lastname'] . "</div>
                        <div class='emailA-detail'>E-mail :&ensp;".$Z['0']['email'] . "</div>
                        <div class='age-detail'>Age :&ensp;".$Z['0']['age'] . " years </div>
                        <div class='from-detail'>Address</div>
                        <div class='address-detail'>".$Z['0']['address'] ."</div>
                        <div class='btn-userDetails'>
                            <a href='userForm.php?userId={$uId}' class='btn-edit'>Edit</a>
                            <a href='#' class='btn-delete'>Delete</a>
                        </div>
                        <a href='users.php' class='allusers'>-See All users-</a>
                </div>
    
    ";

    
?>
        </section>

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