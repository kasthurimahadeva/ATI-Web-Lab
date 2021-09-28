function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == null || username == "") {
        alert("Please Enter Your Username");
    }
    else if (password == null || password == "") {
         alert("Please Enter your Password");
            }
        else if(password.length  < 8){
            alert("Please Enter Minimum 8 Characters")
        }
    else
    alert("Login Successfully...!!!");   
} 