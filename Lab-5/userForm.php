<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>User Form</title>
    <link type="text/css" rel="stylesheet" href="userForm.css">
</head>
<body>
    <form action="userData.php" method="post" class="uform">
        <div class="exit">
             <a href="index.html">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <h1>Create User</h1>
        <div>
            <input type="text" name="fname" placeholder="First Name" required="">
        </div>
        <div>
            <input type="text" name="lname" placeholder="Last Name" required="">
        </div>
        <div>
            <input type="text" name="email" placeholder="Email" required="">
        </div>
        <div>
            <textarea type="text" name="address" cols="21" rows="5" placeholder="Address" required=""></textarea>
        </div>
        <div>
            <input type="text" name="age" placeholder="Age" required="">
        </div>
        <div>
            <input type="submit" name="sbt" value="Submit" required="">
        </div>
    </form>
</body>
</html>