<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>Home page</title>
</head>

<body>
    
    <div class="main">
            <nav>
                <ul class="nav_links">
                    <li class="nav_li"><a href="index.html">Home</a></li>
                    <li class="nav_li"><a href="userForm.php">Create User</a></li>
                    <li class="nav_li"><a href="users.php" style="background-color: rgb(16, 172, 81);">Users</a></li>
                </ul>
            </nav>
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
                        <div class='address-detail'>".$Z['0']['addres'] ."</div>
                        <div class='btn-userDetails'>
                            <a href='userForm.php?userId={$uId}' class='btn-edit'>Edit</a>
                            <a class='btn-delete' id='btn-delete' onclick='openDeleteMessage()'>Delete</a>
                        </div>
                        <a href='users.php' class='allusers'> Back </a>
                </div>
                
        </section>
    ";

    
?>
       
       <div class='message-delete'>
            <div class='message-head-delete'>
                <img src='Image/x-button.png' alt='icon'>
                <h2>Delete User</h2>
                <label>Are you sure you want to delete this user?</label>
    
                <div class='line'></div>
                <form action='' method='post'>
                <div class='msg-btns-del'>
                    <a href='#' class='ms-btn-cancel' id='ms-btn-cancel' onclick='closeDeleteMessage()' name='cancel'>Cancel</a>
                    <a href='#' class='ms-btn-delete' id='ms-btn-delete' onclick='deleteRecord()' name='delete'>Delete</a>
                </div>
                </form>
                
            </div>
        </div>

    </div>
    
    <script>
        function openDeleteMessage(){
            document.querySelector(".message-delete").style.display="flex";
        }
        function closeDeleteMessage(){
            document.querySelector(".message-delete").style.display="none";
        }
        function deleteRecord(){

            <?php
                echo "
                window.location.href='deleteUser.php?userId={$uId}';
                ";
            ?>
                
        }
            
            
    </script>

   
</body>

</html>