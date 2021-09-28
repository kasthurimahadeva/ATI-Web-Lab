function validateSignup() {
    var Fullname = document.getElementById("fullName").value;
    var Username = document.getElementById("username").value;
    var Email = document.getElementById("e-mail").value;
    var PhoneNumber = document.getElementById("phoneNumber").value;
    var Password = document.getElementById("password").value;
    var ConfirmPassword = document.getElementById("confirmPassword").value;

    if (Fullname =="") {
        alert("Please Enter Your Full Name");
    }
    if (Username =="") {
        alert("Please Enter Your UserName");
    }
    if (Email =="") {
        alert("Please Enter Your E-mail");
    }
    if (PhoneNumber =="") {
        alert("Please Enter Your Phone Number");
    }
    if (Password =="") {
        alert("Please Enter Your Password");
    }
        else if(password.length  < 8){
        alert("Please Enter Minimum 8 Characters");   
    }
    if (ConfirmPassword =="") {
        alert("Please Enter Your Confirm Password");
    }  
        else if(ConfirmPassword !== Password) {
        alert("Incorrect Confirm Password");
    }
    else 
        alert("Successfully Signup...!!!");
    }
