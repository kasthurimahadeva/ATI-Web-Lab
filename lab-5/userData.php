<?php
    include("functions.php");
    
    if(empty($_POST['fname'])  || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['age']) || empty($_POST['address'])){
    //    echo "<script>alert('fields can not be empty!Data entered not successfully' );
    //    window.location.href='userForm.php';</script>";
    //    header('Location: ' . $_SERVER['HTTP_REFERER']);
    //     exit;
    
    echo"
    <link rel='stylesheet' href='css/style.css'>
    <div class='message-content-CI'>
    <div class='message-header-CI'>
        <img src='Image/cancel.png' alt='icon'>
        <h2>Invalid input</h2>
        <label>Fields cannot be empty!</label>

        <div class='line'></div>
        <div class='msg-btns'>
            <a href='#' class='ms-btn' id='ms-btn-ok'>oK</a>
        </div>
    </div>
</div>
    
        <script>
        document.getElementById('ms-btn-ok').addEventListener('click',
        function(){
            window.location.href='userForm.php';
        }); 
        </script>
    
    ";
    }
    else{
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $age = $_POST["age"];
        $id = insertUserData($firstname, $lastname, $email,$address,$age);
        // echo "<script>alert('Data entered successfully' );
        // window.location.href='userForm.php';</script>";
        // header('Location: ' . $_SERVER['HTTP_REFERER']);
        // exit;

        echo "
        <link rel='stylesheet' href='css/style.css'>
        <div class='message-content-C'>
        <div class='message-header-C'>
            <img src='Image/checked.png' alt='icon'>
            <h2>Valid input</h2>
            <label>successfully data entered</label>

            <div class='line'></div>
            <div class='msg-btns'>
                <a href='#' class='ms-btn' id='ms-btn-ok'>oK</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('ms-btn-ok').addEventListener('click',
        function(){
            window.location.href='userForm.php';
        }); 
        </script>
        
        ";
    }
?>