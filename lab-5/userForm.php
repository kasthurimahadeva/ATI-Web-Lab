<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Create Users</title>
<style>
ul li{
    list-style: none;
    display: inline;
    margin-left: 20px;
    margin-right: 20px;
    font-family: serif;
}
li a{
    text-decoration: none;
    text-transform: uppercase;
    color: black;
    
}
.navbar{
    width: 85%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 100px;
    padding-top: 25px;
}
    body{
    background-color:skyblue;
    font-family: sans-serif;
}
.box{
    width:550px;
    height:520px;
    margin:auto;
    background-color:wheat;
    border-radius:3px;
}
h2{
    text-align:center;
    padding-top: 15px;
}
h3{
    text-align: center;
}
form label{
    display:flex;
    margin-top:20px;
    font-size:18px;
    margin-left: 25px;

}
form input{
    width: 480px;
    padding: 7px;
    border:black;
    border:1px solid gray;
    outline:indigo;
    margin-left: 25px;
    
}
input[type="submit"]{
    width:500px;
    height:35px;
    margin-top:20px;
    border:none;
    background-color: mediumturquoise;
    color:white;
    font-size:18px;
}
input[type="submit"]:hover{
    background-color: wheat;
    color: mediumturquoise;
}
</style>
</head>
<body>
<div class="main">
            <nav class="navbar">
                <div></div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="userForm.php">Create User</a></li>
                    <li><a href="users.php">Users</a></li>
                </ul>
            </nav>
        </div>
<div class="box">
        <h2>Create User</h2>
        <h3>Please fill in this form to create an account</h3>
        <form method="POST" action="userData.php">
            <label>First Name</label>
            <input type="text" name="firstname" id="firstname" required><br>
            <label>Last Name</label>
            <input type="text" name="lastname" id="lastname" required><br>
            <label>E-mail</label>
            <input type="email" name="email" id="email" required><br>
            <label>Address</label>
            <input type="text" name="address" id="address" required><br>
            <label>Age</label>
            <input type="number" name="age" id="age" required><br> 
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>