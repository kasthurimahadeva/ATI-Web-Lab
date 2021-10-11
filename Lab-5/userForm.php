<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>
    <div class="userform">
    <h2>Create an Account</h2>
    <form action="userData.php" method="POST">
        <div>
            <label>First Name:<input type="text" name="fname"></label>
        </div>
        <div>
            <label>Last Name:<input type="text" name="lname"></label>
        </div>
        <div>
            <label>E-Mail:<input type="text" name="email"></label>
        </div>
        <div>
            <label>Address: <textarea name="address" cols="20" rows="5"></textarea></label>
        </div>
        <div>
            <label>Age:<input type="text" name="age"></label>
        </div>
        <div class="btn">
           <input type="submit">
        </div>
    </form>
    </div>

</body>
</html>