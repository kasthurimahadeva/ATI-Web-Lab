<html>
  <head>
    <title> FORM </title>
  </head>
  <body>
    <form action = "userData.php" method = "POST">
    <table>
    <tr>
      <td> <label for = "Firstname">Firstname </label> </td>
      <td> <input type = "text" id = "Firstname" name = "Firstname"> </td>
    </tr> 

    <tr>
    <td><label for = "Lastname">Lastname </label></td>
    <td><input type = "text" id = "Lastname" name = "Lastname"></td>
    </tr>  

    <tr>
    <td><label for = "Email">Email </label></td>
    <td><input type = "text" id = "Email" name = "Email"></td>
    </tr>   

    <tr>
    <td><label for = "Address">Address</label></td>
    <td><input type = "text" id = "Addresss" name = "Address"></td>
    </tr>   

    <tr>
    <td><label for = "Age">Age</label></td>
    <td><input type = "text" id = "Age" name = "Age"></td>
    </tr>  
    </table>
    <div>
      <input type = "submit" value = "Submit">
    </div>
</form>
  </body>
</html>